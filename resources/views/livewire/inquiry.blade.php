<div>
    <form wire:submit="create">
        {{ $this->form }}
        
        <div>
            <button type="submit" class="mt-10 inline-flex justify-center rounded-md border border-transparent bg-green-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">Submit</button>
          </div>
    </form>
    
    <x-filament-actions::modals />
</div>

