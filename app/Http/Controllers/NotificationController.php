<?php

namespace App\Http\Controllers;
use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function markAsRead()
    {
        Notification::where('status', 0)->update(['status' => 1]);

        return response()->json(['message' => 'Notifiations are marked as read']);
    }
}