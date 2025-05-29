<?php

namespace App\Http\Livewire;

use App\Models\Member;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Pagination\Paginator;

class Lifetimemember extends Component
{
    use WithPagination;
    public $searchTerms = '';
    public $currentPage = 1;

    protected $paginationView = 'custom-pagination';

    public function render()
    {
        $searchTerms = '%' . $this->searchTerms . '%';

        $lifetimemembers = Member::where('type', 'Lifetime')->where(function ($query) use ($searchTerms) {
            $query->where('name', 'like', $searchTerms)
                ->orWhere('membership_id', 'like', $searchTerms);
        })->oldest('order')->paginate(100);

        return view('livewire.lifetimemember', compact('lifetimemembers'));
    }

    public function setPage($url)
    {
        $this->currentPage = explode('page=', $url)[1];
        Paginator::currentPageResolver(function () {
            return $this->currentPage;
        });
    }
}
