<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatController extends Controller
{
    public function getResponse(Request $request) {
        $question = strtolower($request->input('question'));

        // 🔹 Sample Responses (You can enhance this using AI)
        $responses = [
            "what is your return policy?" => "You can return items within 30 days with a receipt.",
            "how to contact support?" => "You can contact our support at forevermodest@gmail.com.",
            "how to track my order?" => "Go to your account and check the 'Orders' section."
        ];

        // 🔹 If question exists in predefined responses, return it
        if (array_key_exists($question, $responses)) {
            return response()->json(['response' => $responses[$question]]);
        }

        // 🔹 If no predefined answer, get AI-generated response
        $ai_response = $this->getAiResponse($question);

        return response()->json(['response' => $ai_response]);
    }

    // 🔹 AI Response (Optional: Uses OpenAI API)
    private function getAiResponse($question) {
        $apiKey = env('OPENAI_API_KEY'); // Set this in .env
        $response = Http::withHeaders([
            'Authorization' => "Bearer $apiKey",
            'Content-Type' => 'application/json',
        ])->post("https://api.openai.com/v1/chat/completions", [
            "model" => "gpt-3.5-turbo",
            "messages" => [
                ["role" => "system", "content" => "You are a helpful assistant."],
                ["role" => "user", "content" => $question]
            ]
        ]);

        return $response->json()['choices'][0]['message']['content'] ?? "I'm not sure. Please contact support.";
    }
}
