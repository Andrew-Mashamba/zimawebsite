<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class AiAgentController extends Controller
{
    /**
     * Show the AI agent detail page for the given slug.
     */
    public function show(string $slug): View
    {
        $agents = config('ai_agents', []);
        if (! isset($agents[$slug])) {
            abort(404);
        }
        $agent = $agents[$slug];
        $agent['slug'] = $slug;

        return view('frontend.ai-agents.show', [
            'agent' => $agent,
        ]);
    }
}
