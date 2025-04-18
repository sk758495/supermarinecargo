<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChatMessage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ChatController extends Controller
{
    public function showChat($vendor_id)
    {
        $user = Auth::user();
        $messages = ChatMessage::where('user_id', $user->id)
            ->where('vendor_id', $vendor_id)
            ->orderBy('created_at', 'asc')
            ->get();

        return view('chat.user_chat', compact('messages', 'vendor_id'));
    }

    public function vendorChat($user_id)
    {
        $vendor = Auth::guard('vendor')->user();
        $messages = ChatMessage::where('vendor_id', $vendor->id)
            ->where('user_id', $user_id)
            ->orderBy('created_at', 'asc')
            ->get();

        return view('chat.vendor_chat', compact('messages', 'user_id'));
    }

    public function sendMessage(Request $request)
    {
        // Log::info('SendMessage Request:', $request->all());
    
        if ($request->hasFile('attachment')) {
            Log::info('File uploaded:', ['file' => $request->file('attachment')->getClientOriginalName()]);
        } else {
            Log::info('No file uploaded');
        }

        
        $request->validate([
            'message' => 'nullable|string',
            'vendor_id' => 'required_without:user_id|integer',
            'user_id' => 'required_without:vendor_id|integer',
            'sender_type' => 'required|in:user,vendor',
            'attachment' => 'nullable|file|max:10240', // max 10MB
        ]);
    
        $filePath = null;
        $fileType = null;
    
        if ($request->hasFile('attachment')) {
            $file = $request->file('attachment');
            $fileType = $file->getClientOriginalExtension();
            $filePath = $file->store('chat_attachments', 'public');
        }
    
        $message = ChatMessage::create([
            'user_id' => $request->user_id ?? auth()->id(), // fallback to auth()->id()
            'vendor_id' => $request->vendor_id ?? auth('vendor')->id(),
            'message' => $request->message,
            'sender_type' => $request->sender_type,
            'file_path' => $filePath,
            'file_type' => $fileType,
            'is_read' => false,
        ]);  
    
        return response()->json(['status' => 'Message Sent', 'message' => $message]);
    }    


    public function fetchMessages(Request $request)
{
    $messages = ChatMessage::where('user_id', $request->user_id)
        ->where('vendor_id', $request->vendor_id)
        ->with('user') // Add this line
        ->orderBy('created_at', 'asc')
        ->get();

    return response()->json($messages);
}

    
}
