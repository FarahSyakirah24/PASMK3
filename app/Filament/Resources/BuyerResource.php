<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BuyerResource\Pages;
use App\Filament\Resources\BuyerResource\RelationManagers;
use App\Models\Buyer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BuyerResource extends Resource
{
    protected static ?string $model = Buyer::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')->required(),
            Forms\Components\TextInput::make('email')->email()->required(),
            Forms\Components\TextInput::make('phone')->nullable(),
            Forms\Components\Select::make('products')
                ->multiple()
                ->relationship('products', 'name') // 'products' is the relationship method in Buyer model
                ->preload(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
        Tables\Columns\TextColumn::make('name'),
        Tables\Columns\TextColumn::make('email'),
        Tables\Columns\TextColumn::make('phone'),
        Tables\Columns\TextColumn::make('products.count')
            ->label('Product Count')
            ->counts('products'),
    ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBuyers::route('/'),
            'create' => Pages\CreateBuyer::route('/create'),
            'edit' => Pages\EditBuyer::route('/{record}/edit'),
        ];
    }
}
