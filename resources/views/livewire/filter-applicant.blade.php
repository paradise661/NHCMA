<div>
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Applicants ({{ $applicants->total() ?? 0 }})</h5>
        <small class="text-muted float-end">
            <input class="form-control search-input" wire:model="searchTerms" name="search" type="text"
                placeholder="Search ..." aria-label="Search" autocomplete="off">
        </small>
    </div>

    <div class="table-responsive text-nowrap">
        @if ($applicants->isNotEmpty())
            <table class="table">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Photo</th>
                        <th>Applicant</th>
                        <th>Type</th>
                        <th>Email</th>
						<th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($applicants as $key => $applicant)
                        <tr>
                            <td><strong>{{ $key + $applicants->firstItem() }}</strong></td>
                            <td class="">
                                <a class="fancybox" data-fancybox="demo"
                                    href="{{ asset('admin/applicant/') }}/{{ $applicant->photo ?: 'avatar.png' }}">
                                    <img src="{{ asset('admin/applicant/') }}/{{ $applicant->photo ?: 'avatar.png' }}"
                                        alt="{{ $applicant->applicant_name ?? '' }}" width="80px">
                                </a>
                            </td>
                            <td><strong>{{ $applicant->applicant_name ?? '-' }}</strong></td>
                            <td><strong>{{ $applicant->membership_type ?? '-' }}</strong></td>
                            <td>{{ $applicant->email ?? '-' }}</td>
							<td>{{ $applicant->updated_at->toDateString() ?? '' }}</td>
                            <td>
                                <a class="btn btn-sm btn-secondary"
                                    href="{{ route('admin.applicants.show', $applicant->id) }}"
                                    style="float: left;margin-right: 5px;"><i class="fa-solid fa-eye"></i>
                                    Show</a>

                                <a class="btn btn-sm btn-primary"
                                    href="{{ route('admin.applicants.edit', $applicant->id) }}"
                                    style="float: left;margin-right: 5px;"><i class="fa-solid fa-pen-to-square"></i>
                                    Edit</a>

                                <form class="delete-form"
                                    action="{{ route('admin.applicants.destroy', $applicant->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger delete_applicant mr-2" id=""
                                        data-type="confirm" type="submit" title="Delete"><i class="fa fa-trash"></i>
                                        Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $applicants->links('vendor.livewire.custom') }}
        @else
            <div class="card-body">
                <h6>No Data Found!</h6>
            </div>
        @endif
    </div>
</div>
