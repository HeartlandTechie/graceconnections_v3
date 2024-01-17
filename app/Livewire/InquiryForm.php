<?php

namespace App\Livewire;
 
use App\Models\InquiryForm;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Illuminate\Contracts\View\View;
use Livewire\Component;
 
class InquiryForm extends Component implements HasForms
{
    use InteractsWithForms;
    
    public ?array $data = [];
    
    public function mount(): void
    {
        $this->form->fill();
    }
    
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                   ,
                TextInput::make('email')
                   ,
                   TextInput::make('phone'),
               
                   Textarea::make('message'),
                // ...
            ])
            ->statePath('data');
    }
    
    public function create(): void
    {
      

        InquiryForm::create($this->form->getState());
        Notification::make()
            ->title('Saved successfully')
            ->success()
            ->send();

    }
    
    public function render()
    {
        return view('livewire.inquiry-form');
    }
}