<div>

    <div class="bg-primary py-3">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <h4 class="headings-4 text-white m-0">Lifetime Members</h4>
                <small class="text-muted float-end">
                    <input class="form-control search-input px-3" wire:model="searchTerms" name="search" type="text"
                        placeholder="Search ..." aria-label="Search" autocomplete="off">
                </small>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-3">
            @if ($lifetimemembers->isNotEmpty())
                @foreach ($lifetimemembers as $member)
                    <div class="col-md-6 col-sm-12 col-lg-3 card-team mb-4 d-grid align-self-stretch">
                        <div class="container wrap">
                            <div class="media-wrapper card-team-image">
                                <img src="{{ asset('admin/images') }}/{{ $member->image ?: 'avatar.png' }}"
                                    alt="{{ $member->name ?? '' }}" />
                            </div>

                            <a class="h5 mt-4 fw-normal mt-2 text-center"
                                href="javascript:void(0)">{{ $member->name ?? '' }}</a>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex justify-content-center mt-3">
                    {{ $lifetimemembers->links('vendor.livewire.custom') }}
                </div>
            @else
                <div class="card-body shadow-lg py-3">
                    <h6 class="text-center">Data Not Found </h6>
                </div>
            @endif
        </div>
    </div>
</div>
