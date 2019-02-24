<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeBooks; // นำเอาโมเดล TypeBooks เข้ามาใช้งาน

class TypeBooksController extends Controller
{
    public function index ()
    {
        $obj = new TypeBooks();
        $typebooks = $obj->paginate_book();
        // $firstRowOnThisPage = $typebooks->currentPage() * $typebooks->perPage() - $typebooks->perPage() + 1;
        $rank = $typebooks->firstItem();
        $count = $obj->count_book();
        $get_fullnamebooks = $obj->find(1);

        return view('typebooks.index', compact('typebooks','count', 'get_fullnamebooks', 'rank'));
    }
    public function destroy($id)
    {
        TypeBooks::destroy($id);
        return back();
    }
}
