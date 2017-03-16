<?php

namespace Stevepop\Laraquotes;

use Illuminate\Support\ServiceProvider;

class LaraQuotesServiceProvider extends ServiceProvider {
	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot() {

	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register() {
		$this->commands([
			QuotesCommand::class,
		]);
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides() {

		return ['laraquote.fetch'];
	}
}
