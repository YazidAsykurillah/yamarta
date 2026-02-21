<?php

namespace App\Filament\Resources\Portfolios\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PortfolioForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Textarea::make('description')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                \Filament\Forms\Components\Repeater::make('images')
                    ->relationship('images')
                    ->schema([
                        FileUpload::make('image')
                            ->image()
                            ->disk('public')
                            ->directory('portfolios')
                            ->required(),
                        // sort_order is managed by orderColumn
                    ])
                    ->orderColumn('sort_order')
                    ->defaultItems(1)
                    ->reorderableWithButtons()
                    ->columnSpanFull(),
                \Filament\Forms\Components\TagsInput::make('tags')
                    ->label('Technologies/Tags')
                    ->placeholder('e.g., Laravel, Vue.js, Startup')
                    ->default(null),
                TextInput::make('external_link')
                    ->label('External Link (Optional)')
                    ->url()
                    ->maxLength(255)
                    ->default(null),
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
                Toggle::make('is_visible')
                    ->label('Visible on site')
                    ->default(true)
                    ->required(),
            ]);
    }
}
