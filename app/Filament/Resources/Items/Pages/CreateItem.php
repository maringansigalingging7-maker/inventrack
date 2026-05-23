<?php

namespace App\Filament\Resources\ItemResource\Pages;

use App\Filament\Resources\ItemResource;
use App\Filament\Resources\Items\ItemResource as ItemsItemResource;
use Filament\Resources\Pages\CreateRecord;

class CreateItem extends CreateRecord
{
    protected static string $resource = ItemsItemResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Otomatis isi users_id dengan ID admin yang sedang login
        $data['users_id'] = auth()->id();

        return $data;
    }
}