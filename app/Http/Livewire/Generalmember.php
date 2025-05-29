<?php

namespace App\Http\Livewire;

use App\Models\Member;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Pagination\Paginator;

class Generalmember extends Component
{
    use WithPagination;
    public $searchTerms = '';
    public $currentPage = 1;

    protected $paginationView = 'custom-pagination';

    public function render()
    {
        $searchTerms = '%' . $this->searchTerms . '%';

        $generalmembers =  Member::where('type', 'General')->where('name', 'like', $searchTerms)->orderBy('name', 'ASC')->paginate(200);

        return view('livewire.generalmember', compact('generalmembers'));
    }

    public function setPage($url)
    {
        $this->currentPage = explode('page=', $url)[1];
        Paginator::currentPageResolver(function () {
            return $this->currentPage;
        });
    }
}
