<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class EventController extends Controller {
    public function index(Request $request, string $lang) {
		if ($request->wantsJson()) {
			App::setLocale($lang);

			$events = Event::with("type", "source.lang");

			return $events->get();
		}

		return abort(403);
	}

	public function show(Request $request, string $lang, Event $event) {
		if ($request->wantsJson()) {
			App::setLocale($lang);

			return $event->load("type", "source.lang");
		}

		return abort(403);
	}
}
