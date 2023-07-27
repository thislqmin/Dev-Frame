<?php
// app/Http/Controllers/NoteController.php
namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $notes = $user->notes;
        return view('dashboard.index-notes', compact('notes'));
    }

    public function create()
    {
        return view('dashboard.create-notes');
    }

    public function store(Request $request)
    {
        $request->validate([
            'day' => 'required|integer',
            'content' => 'required|string',
            'complaint' => 'nullable|string',
        ]);

        $user = Auth::user();
        $user->notes()->create($request->all());

        return redirect()->route('notes.index')->with('success', 'Catatan berhasil ditambahkan');
    }

    public function edit(Note $note)
    {
        return view('dashboard.edit-notes', compact('note'));
    }

    public function update(Request $request, Note $note)
    {
        $request->validate([
            'day' => 'required',
            'content' => 'required',
            'complaint' => 'required',
        ]);

        $note->update($request->all());
        return redirect()->route('notes.index')->with('success', 'Catatan berhasil diupdate');
    }

    public function destroy(Note $note)
    {
        $note->delete();
        return redirect()->route('notes.index')->with('success', 'Catatan berhasil dihapus');
    }
}
