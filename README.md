# Laravel Plugin for Vegvesen API Integration

This Laravel plugin facilitates integration with the Vegvesen API, providing access to vehicle information and data. The Vegvesen API, maintained by the Norwegian Public Roads Administration, offers various endpoints for retrieving vehicle details. For detailed information on using the Vegvesen API, refer to the [Vegvesen API Documentation](https://autosys-kjoretoy-api.atlas.vegvesen.no/api-ui/index-enkeltoppslag.html).

## Installation

Install the plugin via Composer:

```bash
composer require eeappdev/vegvesen
```

## Configuration

Publish the configuration file to customize your Vegvesen API settings:

```bash
php artisan vendor:publish --provider="Eeappdev\Vegvesen\VegvesenServiceProvider"
````

After publishing, you'll find the vegvesen.php configuration file in your config directory. Update the following environment variables in your .env file with your Vegvesen API credentials:

```dotenv
VEGVESEN_BASEURL=
VEGVESEN_TOKEN=
```

If you don't specify VEGVESEN_BASEURL in your .env file, the default value from the vegvesen.php configuration file will be used.

## Usage

Use the Http::vegvesen() macro to make requests to the Vegvesen API:

```php
use Illuminate\Support\Facades\Http;

$response = Http::vegvesen()->get('kjennemerke={registreringsnummer}');
$response = Http::vegvesen()->get('understellsnummer={vin nummer}');
```

Replace `{registreringsnummer}` or `{vin nummer}` with the appropriate vehicle registration number or VIN number. Adjust the endpoint and request parameters according to your API needs. Refer to the [Vegvesen API Documentation](https://autosys-kjoretoy-api.atlas.vegvesen.no/api-ui/index-enkeltoppslag.html) for detailed information on available endpoints and request formats.