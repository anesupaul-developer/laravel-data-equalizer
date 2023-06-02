<?php

namespace App\Console\Commands;

use App\Services\RandomJoke;
use Exception;
use Illuminate\Console\Command;
use App\Models\RandomJoke as Model;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Console\Command\Command as CommandAlias;

class RandomJokesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'random:jokes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get random jokes';

    /**
     * Execute the console command.
     *
     * @return int
     * @throws Exception
     */
    public function handle(): int
    {
        try {
            $result = RandomJoke::getJoke();

            Model::query()->updateOrCreate(['joke_id' => $result->id], [
                'type' => $result->type,
                'setup' => $result->setup,
                'punchline' => $result->punchline
            ]);

            $this->output->comment('setup: ' . $result->setup);
            $this->output->comment('punchline: '. $result->punchline);

            return CommandAlias::SUCCESS;
        } catch(\Exception $exception) {
            Log::channel('mongo')->info($exception->getMessage());
            $this->output->comment($exception->getMessage());
            return CommandAlias::FAILURE;
        }
    }
}
