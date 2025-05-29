<?php

namespace App\Http\Livewire;

use App\Models\Registration;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Pagination\Paginator;


class FilterApplicant extends Component
{
    use WithPagination;
    public $searchTerms = '';
    public $currentPage = 1;

    protected $paginationView = 'custom-pagination';

    public function render()
    {
        $searchTerms = '%' . $this->searchTerms . '%';

        $applicants = Registration::where('applicant_name', 'like', $searchTerms)
            ->orWhere('membership_type', 'like', $searchTerms)
            ->orWhere('gender', 'like', $searchTerms)
            ->orWhere('email', 'like', $searchTerms)
            ->orWhere('phone', 'like', $searchTerms)
            ->orWhere('mobile', 'like', $searchTerms)
            ->orWhere('recommendor_name', 'like', $searchTerms)
            ->orWhere('recommendor_membership_no', 'like', $searchTerms)
            ->orWhere('institute', 'like', $searchTerms)
            ->orWhere('occupation', 'like', $searchTerms)
            ->orWhere('per_province', 'like', $searchTerms)
            ->orWhere('per_district', 'like', $searchTerms)
            ->orWhere('per_municipality', 'like', $searchTerms)
            ->latest()->paginate(20);

        return view('livewire.filter-applicant', compact('applicants'));
    }

    public function setPage($url)
    {
        $this->currentPage = explode('page=', $url)[1];
        Paginator::currentPageResolver(function () {
            return $this->currentPage;
        });
    }
}
