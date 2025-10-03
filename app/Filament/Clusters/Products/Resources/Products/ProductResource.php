<?php

namespace App\Filament\Clusters\Products\Resources\Products;

use BackedEnum;
use Filament\Tables\Table;
use App\Models\Shop\Product;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Clusters\Products\ProductsCluster;
use App\Filament\Clusters\Products\Resources\Products\Pages\EditProduct;
use App\Filament\Clusters\Products\Resources\Products\Pages\ListProducts;
use App\Filament\Clusters\Products\Resources\Products\Pages\CreateProduct;
use App\Filament\Clusters\Products\Resources\Products\Schemas\ProductForm;
use App\Filament\Clusters\Products\Resources\Products\Tables\ProductsTable;
use App\Filament\Clusters\Products\Resources\Products\Widgets\ProductStats;
use App\Filament\Clusters\Products\Resources\Products\RelationManagers\CommentsRelationManager;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-bolt';

    protected static ?string $cluster = ProductsCluster::class;

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?int $navigationSort = 0;

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
            CommentsRelationManager::class,
        ];
    }

    public static function getWidgets(): array
    {
        return [
            ProductStats::class,
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

    public static function getGloballySearchableAttributes(): array
    {
        return ['name', 'sku', 'brand.name'];
    }

    public static function getGlobalSearchResultDetails(Model $record): array
    {
        /** @var Product $record */

        return [
            'Brand' => optional($record->brand)->name,
        ];
    }

    /** @return Builder<Product> */
    public static function getGlobalSearchEloquentQuery(): Builder
    {
        return parent::getGlobalSearchEloquentQuery()->with(['brand']);
    }


     public static function getNavigationBadge(): ?string
    {
        /** @var class-string<Model> $modelClass */
        $modelClass = static::$model;

        return (string) $modelClass::whereColumn('qty', '<', 'security_stock')->count();
    }
}
