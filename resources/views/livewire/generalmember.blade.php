<div>

    <div class="bg-primary py-3">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <h4 class="headings-4 text-white m-0">General Members ({{ $generalmembers->total() ?? 0 }})</h4>
                <small class="text-muted float-end">
                    <input class="form-control search-input" wire:model="searchTerms" name="search" type="text"
                        placeholder="Search ..." aria-label="Search" autocomplete="off">
                </small>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-3">
            @if ($generalmembers->isNotEmpty())
                <table class="table table-striped table-bordered table-design m-0">
                    <thead>
                        <tr>
                            <th scope="col">Membership Number</th>
                            <th scope="col">Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($generalmembers as $key => $gmember)
                            <tr>
                                <th scope="row">{{ $gmember->membership_id ?? '' }}</th>
                                <td>{{ $gmember->name ?? '' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center mt-3">
                    {{ $generalmembers->links('vendor.livewire.custom') }}
                </div>
            @else
                <div class="card-body shadow-lg py-3">
                    <h6 class="text-center">Data Not Found </h6>
                </div>
            @endif
        </div>
    </div>
</div>
