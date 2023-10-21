<?php

use App\Models\AppSettings;
use App\Models\DeveloperSettings;


// Developer Settings view

view()->share('Application', DeveloperSettings::firstWhere('name', 'application'));
view()->share('Page', DeveloperSettings::firstWhere('name', 'page'));
view()->share('Developer', DeveloperSettings::firstWhere('name', 'developer'));


// App Settings view
view()->share('DefaultLayout', AppSettings::firstWhere('name', 'default layout'));
