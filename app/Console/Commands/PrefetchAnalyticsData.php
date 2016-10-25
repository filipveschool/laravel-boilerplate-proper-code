<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Analytics\Period;
use Analytics;


class PrefetchAnalyticsData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'analytics:prefetch';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Prefetch the analytics data.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if (empty(config('laravel-analytics.view_id'))) {
            return;
        }
        Analytics::fetchTotalVisitorsAndPageViews(Period::days(14));
        Analytics::fetchTotalVisitorsAndPageViews(Period::days(365));
        Analytics::fetchMostVisitedPages(Period::days(365));
        Analytics::fetchTopReferrers(Period::days(365));
        Analytics::fetchTopBrowsers(Period::days(365));
        $this->info('Analytics data prefetched!');
    }
}
