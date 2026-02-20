<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Portfolio;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $storageDir = storage_path('app/public/portfolios');
        if (!File::exists($storageDir)) {
            File::makeDirectory($storageDir, 0755, true);
        }

        $dummyData = [
            [
                'title' => 'Amanah Capital',
                'description' => 'A highly secure, performant investment tracking dashboard with real-time analytics and user portfolio management capabilities.',
                'source_image' => 'fintech.png',
                'tags' => ['Laravel', 'Vue.js', 'Fintech'],
                'external_link' => 'https://amanahcapital.example.com',
                'sort_order' => 1,
            ],
            [
                'title' => 'Luxe Indo Heritage',
                'description' => 'A blazing fast headless e-commerce experience designed to showcase premium, culturally significant products to a global audience.',
                'source_image' => 'ecommerce.png',
                'tags' => ['Next.js', 'Shopify', 'E-Commerce'],
                'external_link' => 'https://luxeindo.example.com',
                'sort_order' => 2,
            ],
            [
                'title' => 'Sehat Utama',
                'description' => 'A HIPAA-compliant telemedicine platform connecting patients with specialized practitioners via secure video consultations.',
                'source_image' => 'healthcare.png',
                'tags' => ['React Native', 'Node.js', 'Healthcare'],
                'external_link' => 'https://sehatutama.example.com',
                'sort_order' => 3,
            ],
            [
                'title' => 'Urban Vista',
                'description' => 'An immersive property exploration platform featuring interactive 3D virtual tours and real-time market data integration.',
                'source_image' => 'realestate.png',
                'tags' => ['Vue.js', 'Three.js', 'Real Estate'],
                'external_link' => 'https://urbanvista.example.com',
                'sort_order' => 4,
            ],
            [
                'title' => 'Nexus CRM AI',
                'description' => 'An intelligent customer relationship management system powered by AI to automate workflows and predict sales trends.',
                'source_image' => 'fintech.png', // reusing an image for the 5th item
                'tags' => ['Python', 'React', 'AI/ML'],
                'external_link' => 'https://nexus.example.com',
                'sort_order' => 5,
            ]
        ];

        foreach ($dummyData as $data) {
            $sourcePath = public_path('assets/images/' . $data['source_image']);
            $destFilename = uniqid() . '_' . $data['source_image'];
            $destPath = $storageDir . '/' . $destFilename;

            if (File::exists($sourcePath)) {
                File::copy($sourcePath, $destPath);
            }

            Portfolio::create([
                'title' => $data['title'],
                'slug' => \Illuminate\Support\Str::slug($data['title']),
                'description' => $data['description'],
                'image' => 'portfolios/' . $destFilename,
                'tags' => $data['tags'],
                'external_link' => $data['external_link'],
                'sort_order' => $data['sort_order'],
                'is_visible' => true,
            ]);
        }
    }
}
