<?php
$events = Event::orderByDesc('start_date')->limit(4)->get();