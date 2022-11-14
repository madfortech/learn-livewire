<form wire:submit.prevent="save">
    @if ($messageText != '')
        <div class="alert alert-info">
            {{ $messageText }}
        </div>
    @endif
    <div class="form-group row">
        <label for="demoname" class="col-md-4 col-form-label text-md-right">
            Demo name
        </label>
        <div class="col-md-6">
        <input wire:model="demoname" type="text"
               class="form-control @error('demoname') is-invalid @enderror"/>
        @error('demoname')
        <span class="invalid-feedback" role="alert">{{ $message }}</span>
        @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="demodescription" class="col-md-4 col-form-label text-md-right">
            Demo description
        </label>
        <div class="col-md-6">
        <textarea wire:model="demodescription" class="form-control @error('demodescription') is-invalid @enderror"></textarea>
        @error('demodescription')
        <span class="invalid-feedback" role="alert">{{ $message }}</span>
        @enderror
        </div>
    </div>
    <div class="form-group row mb-0">
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn-primary">
                Add Demo Product
            </button>
        </div>
    </div>
</form>