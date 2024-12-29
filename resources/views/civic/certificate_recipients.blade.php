<x-app-layout>
    <div class="container mt-4">
        <div class="row mb-4">
            <div class="col-md-3">
                <label for="from-date" class="form-label">{{ __('labels.to_be') }}</label>
                <input type="date" id="from-date" class="form-control">
            </div>
            <div class="col-md-3">
                <label for="to-date" class="form-label">{{ __('labels.until') }}</label>
                <input type="date" id="to-date" class="form-control">
            </div>
            <div class="col-md-2 align-self-end">
                <button class="btn btn-primary w-100">{{ __('table.search') }}</button>
            </div>
        </div>
    </div>
</x-app-layout>
