<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\EventResource;
use App\Models\Event;
use BezhanSalleh\FilamentShield\Traits\HasWidgetShield;
use Saade\FilamentFullCalendar\Actions;
use Saade\FilamentFullCalendar\Data\EventData;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;
use Filament\Forms;
use Filament\Forms\Form;

class CalendarWidget extends FullCalendarWidget
{
    use HasWidgetShield;
    public string|null|\Illuminate\Database\Eloquent\Model $model = Event::class;
    /**
     * FullCalendar will call this function whenever it needs new event data.
     * This is triggered when the user clicks prev/next or switches views on the calendar.
     */
    public function fetchEvents(array $fetchInfo): array
    {

        return Event::query()
            ->where('start', '>=', $fetchInfo['start'])
            ->where('end', '<=', $fetchInfo['end'])
            ->get()
            ->map(
                fn (Event $event) => EventData::make()
                    ->id($event->id)
                    ->title($event->title)
                    ->start($event->start)
                    ->end($event->end)
            )
            ->all();
    }


    protected function headerActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('title')
                ->required()
                ->maxLength(255),
            Forms\Components\Textarea::make('description')
                ->required()
                ->maxLength(65535)
                ->columnSpanFull(),
            Forms\Components\DateTimePicker::make('start')
                ->required(),
            Forms\Components\DateTimePicker::make('end'),
            Forms\Components\Toggle::make('all_day'),
            Forms\Components\ColorPicker::make('border_color'),
            Forms\Components\ColorPicker::make('background_color'),
            Forms\Components\ColorPicker::make('text_color'),
        ];
    }

    public static function canView(): bool
    {
        return true;
    }

}
