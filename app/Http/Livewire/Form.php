<?php

namespace App\Http\Livewire;

use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Form extends Component implements HasForms
{
    use InteractsWithForms;

    public function mount()
    {
        $this->prepareForm();
    }

    public function prepareForm()
    {
        $this->form->fill([
            'title' => 'title',
            'content' => 'Dit is een test'
        ]);
    }

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('title')->required(),
            MarkdownEditor::make('content'),
        ];
    }

    public function render(): View
    {
        return view('livewire.form');
    }
}
