<?php

namespace App\Filament\Clusters\Products\Resources\Products;

use App\Filament\Clusters\Products\ProductsCluster;
use App\Filament\Clusters\Products\Resources\Products\Pages\CreateProduct;
use App\Filament\Clusters\Products\Resources\Products\Pages\EditProduct;
use App\Filament\Clusters\Products\Resources\Products\Pages\ListProducts;
use App\Filament\Clusters\Products\Resources\Products\Schemas\ProductForm;
use App\Filament\Clusters\Products\Resources\Products\Tables\ProductsTable;
use App\Models\Shop\Product;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $cluster = ProductsCluster::class;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return ProductForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProductsTable::configure($table);
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
            'index' => ListProducts::route('/'),
            'create' => CreateProduct::route('/create'),
            'edit' => EditProduct::route('/{record}/edit'),
        ];
    }
}
