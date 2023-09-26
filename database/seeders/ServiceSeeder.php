<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            ['name' => 'STUDIO RENTAL', 'image' => 'asset/image/service/studio_rental.jpg'],
            ['name' => 'DIGITAL MARKETING', 'image' => 'asset/image/service/digital_marketing.jpg'],
            ['name' => 'PRODUCTION HOUSE', 'image' => 'asset/image/service/production_house.jpg'],
            ['name' => 'ANIMATION HOUSE', 'image' => 'asset/image/service/animation_house.jpg'],
            ['name' => 'LIVE STREAMING', 'image' => 'asset/image/service/live_streaming.jpg'],
            ['name' => 'TALENT MANAGEMENT', 'image' => 'asset/image/service/talent_management.jpg'],
            ['name' => 'EVENT ORGANIZER', 'image' => 'asset/image/service/event_organizer.jpg'],
            ['name' => 'PR & BRAND REPUTATION', 'image' => 'asset/image/service/brand_reputation.jpg'],
            ['name' => 'SPORT AGENCY', 'image' => 'asset/image/service/sport_agency.jpg'],
            ['name' => 'MERCHANDISING', 'image' => 'asset/image/service/merchandising.jpg'],
        ];

        foreach ($services as $key => $value) {
            Service::create($value);
        }
    }
}
