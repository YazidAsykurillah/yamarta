<?php

namespace App\Filament\Resources\SeoSettings\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SeoSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('route_name')
                    ->label('Page Route Name')
                    ->placeholder('e.g., home, about, portfolio, contact')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),
                TextInput::make('title')
                    ->label('SEO Title')
                    ->placeholder('Best if kept under 60 characters')
                    ->maxLength(255)
                    ->default(null),
                Textarea::make('description')
                    ->label('Meta Description')
                    ->placeholder('Best if kept under 160 characters')
                    ->maxLength(65535)
                    ->default(null)
                    ->columnSpanFull(),
                \Filament\Forms\Components\TagsInput::make('keywords')
                    ->label('Meta Keywords')
                    ->placeholder('Add keywords and press enter')
                    ->default(null),
                FileUpload::make('og_image')
                    ->label('Open Graph Image')
                    ->image()
                    ->disk('public')
                    ->directory('seo-images')
                    ->columnSpanFull(),
            ]);
    }
}
