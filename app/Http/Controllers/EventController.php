<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use App\Http\Requests\EventRequest;
use Illuminate\Support\Facades\App;

class EventController extends Controller {
    public function index(EventRequest $request, string $lang) {
		if ($request->wantsJson()) {
			App::setLocale($lang);

			$events = Event::with("type", "continents", "source.lang");

			if ($request->has("continent")) {
				$continentId = $request->input("continent");

				$events->fromContinent($continentId);
			}

			if ($request->has("event-type")) {
				$eventTypeId = $request->input("event-type");

				$events->ofType($eventTypeId);
			}

			return $events->get();
		}

		return abort(403);
    }
}
