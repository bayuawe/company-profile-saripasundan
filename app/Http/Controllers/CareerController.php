<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $careers = Career::where('creator_id', auth()->id())->paginate(10);
        return view('admin.careers.index', [
            'careers' => $careers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.careers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'cover' => ['required', 'image', 'mimes:jpeg,png,jpg,'],
            'description' => ['required', 'string'],
            'requirements' => ['required', 'string'],
            'benefits' => ['required', 'string'],
            'how_to_apply' => ['required', 'string'],
        ]);

        DB::beginTransaction();
        try {
            if ($request->hasFile('cover')) {
                $coverPath = $request->file('cover')->store('career_covers', 'public');
                $validated['cover'] = $coverPath;
            }
            $validated['slug'] = Str::slug($request->title);
            $validated['creator_id'] = Auth::id();
            $newCareer = Career::create($validated);
            DB::commit();

            return redirect()->route('admin.careers.index')->with('success', 'Career created successfully');
        } catch (\Exception $e) {
            DB::rollBack();

            $error = ValidationException::withMessages([
                'system_error' => ['System error!' . $e->getMessage()]
            ]);
            throw $error;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Career $career)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Career $career)
    {
        //
        return view('admin.careers.edit', [
            'career' => $career
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Career $career)
    {
        //
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'cover' => ['sometimes', 'image', 'mimes:jpeg,png,jpg,'],
            'description' => ['required', 'string'],
            'requirements' => ['required', 'string'],
            'benefits' => ['required', 'string'],
            'how_to_apply' => ['required', 'string'],
        ]);

        DB::beginTransaction();
        try {
            if ($request->hasFile('cover')) {
                $coverPath = $request->file('cover')->store('career_covers', 'public');
                $validated['cover'] = $coverPath;
            }

            $validated['slug'] = Str::slug($request->title);
            $validated['creator_id'] = Auth::id();

            $career->update($validated);

            DB::commit();

            return redirect()->route('admin.careers.index')->with('success', 'Career updated successfully');
        } catch (\Exception $e) {
            DB::rollBack();

            $error = ValidationException::withMessages([
                'system_error' => ['System error!' . $e->getMessage()]
            ]);
            throw $error;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Career $career)
    {
        //
        try {
            $career->delete();
            return redirect()->route('admin.careers.index')->with('success', 'Career deleted successfuly!');
        } catch (\Exception $e) {

            $error = ValidationException::withMessages([
                'system_error' => ['System error!' . $e->getMessage()],
            ]);

            throw $error;
        }
    }
}
