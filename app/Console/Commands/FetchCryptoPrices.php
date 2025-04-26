<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Crytocurrencys;
use App\Models\Price_history;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;


class FetchCryptoPrices extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:fetch-crypto-prices';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $response = Http::withHeaders([
            'X-CMC_PRO_API_KEY' => 'e8f335df-ef21-490d-9502-63e9911685c7',
        ])->get('https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest');

        $cryptos = $response->json()['data'];

        foreach ($cryptos as $crypto) {
            // Buscar si ya existe en la tabla de criptos
            $localCrypto = Crytocurrencys::where('symbol', $crypto['symbol'])->first();

            // Si no existe, la creamos
            if (!$localCrypto) {
                $localCrypto = Crytocurrencys::create([
                    'name' => $crypto['name'],
                    'symbol' => $crypto['symbol'],
                ]);
            }

            // Guardar el historial de precios
            Price_history::create([
                'cryptocurrency_id' => $localCrypto->id,
                'price' => $crypto['quote']['USD']['price'],
                'fetched_at' => Carbon::parse($crypto['quote']['USD']['last_updated'])->format('Y-m-d H:i:s'),

                // 'fetched_at' => $crypto['quote']['USD']['last_updated'],
            ]);
        }

        $this->info('Nombres, símbolos y precios de criptomonedas guardados correctamente.');
    }
}
