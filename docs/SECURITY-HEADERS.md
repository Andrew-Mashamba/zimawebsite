# Security Headers

## Currently applied (middleware)

- **Strict-Transport-Security** – HTTPS only
- **Content-Security-Policy** – Restricts script/style/font sources; currently allows `'unsafe-inline'` and `'unsafe-eval'` for Livewire/Vite
- **Cross-Origin-Opener-Policy (COOP)** – `same-origin` (isolates the window from cross-origin pop-ups)
- **X-Content-Type-Options** – `nosniff`
- **X-Frame-Options** – `SAMEORIGIN`
- **Referrer-Policy**, **Permissions-Policy**

## Lighthouse recommendations (optional hardening)

### 1. Stronger CSP (script-src)

Lighthouse suggests reducing XSS risk by:

- **Avoiding `'unsafe-inline'`** – Use **CSP nonces** (or hashes) so only specific inline scripts run.
- **Using `'strict-dynamic'`** – Scripts loaded by an allowed script are then trusted.

To do this without breaking Livewire/Vite:

1. **Generate a nonce per request** in middleware and share it with the view (e.g. `View::share('cspNonce', base64_encode(random_bytes(16)))`).
2. **Output the nonce on every script tag**:  
   `<script nonce="{{ $cspNonce }}">` for inline, and add `?nonce=...` or use a nonce on Vite/Livewire script tags if the build supports it.
3. **Set CSP**:  
   `script-src 'self' 'nonce-{value}' 'strict-dynamic';`  
   (and keep allowed host sources for older browsers if needed).

Laravel and Livewire do not inject the nonce automatically; you’d need to integrate it in the layout and any partials that output scripts.

### 2. Trusted Types

Lighthouse recommends **Trusted Types** to mitigate DOM XSS:

- Add to CSP: `require-trusted-types-for 'script';` (and optionally a policy name).
- All script sinks (e.g. `innerHTML`, `eval`, `document.write`) must receive Trusted Type objects instead of strings.

This requires changing application (and third-party) JavaScript to use Trusted Type policies. It is a larger front-end change and can break existing code until all sinks are updated.

### 3. Summary

| Recommendation              | Status   | Notes                                              |
|----------------------------|----------|----------------------------------------------------|
| COOP header                | Done     | `Cross-Origin-Opener-Policy: same-origin` in middleware |
| CSP without unsafe-inline  | Optional | Needs nonce (or hash) integration in views/scripts  |
| Trusted Types              | Optional | Needs JS refactor and policy definitions           |

For many sites, the current headers plus COOP already improve security. Strengthening CSP and adding Trusted Types can be done later with the steps above.
