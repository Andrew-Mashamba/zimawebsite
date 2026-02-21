<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns:sitemap="http://www.sitemaps.org/schemas/sitemap/0.9">
  <xsl:output method="html" version="1.0" encoding="UTF-8" indent="yes"/>
  <xsl:template match="/">
    <html xmlns="http://www.w3.org/1999/xhtml">
      <head>
        <title>XML Sitemap – ZIMA Solutions</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <style>
          body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; margin: 2rem; background: #f8f9fa; color: #1a1a1a; }
          h1 { color: #1F3B8D; font-size: 1.5rem; margin-bottom: 0.5rem; }
          p { color: #6b7280; margin-bottom: 1.5rem; }
          table { width: 100%; max-width: 900px; border-collapse: collapse; background: #fff; box-shadow: 0 1px 3px rgba(0,0,0,0.08); border-radius: 8px; overflow: hidden; }
          th, td { padding: 12px 16px; text-align: left; border-bottom: 1px solid #e5e7eb; }
          th { background: #1F3B8D; color: #fff; font-weight: 600; }
          tr:hover { background: #f9fafb; }
          a { color: #1F3B8D; text-decoration: none; }
          a:hover { text-decoration: underline; }
          .count { font-size: 0.875rem; color: #6b7280; }
        </style>
      </head>
      <body>
        <h1>XML Sitemap</h1>
        <p class="count">ZIMA Solutions Limited – <xsl:value-of select="count(sitemap:urlset/sitemap:url)"/> URLs. For search engines; styled for browser display.</p>
        <table>
          <thead>
            <tr>
              <th>#</th>
              <th>URL</th>
              <th>Last modified</th>
            </tr>
          </thead>
          <tbody>
            <xsl:for-each select="sitemap:urlset/sitemap:url">
              <tr>
                <td><xsl:value-of select="position()"/></td>
                <td><a href="{sitemap:loc}"><xsl:value-of select="sitemap:loc"/></a></td>
                <td><xsl:value-of select="sitemap:lastmod"/></td>
              </tr>
            </xsl:for-each>
          </tbody>
        </table>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>
