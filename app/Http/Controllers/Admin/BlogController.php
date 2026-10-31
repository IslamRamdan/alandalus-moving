<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = BlogPost::latest()->get();
        return view('admin.blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required',
            'image'   => 'nullable|image|max:5120',
        ]);

        $image = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('blogs', 'public');
        }

        BlogPost::create([
            'title'   => $request->title,
            'content' => $request->content,
            'image'   => $image,
        ]);

        return redirect()->route('admin.blog.index')->with('success', 'تم إنشاء المقال بنجاح');
    }

    public function edit($id)
    {
        $blog = BlogPost::findOrFail($id);
        return view('admin.blog.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blog = BlogPost::findOrFail($id);

        $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required',
            'image'   => 'nullable|image|max:5120',
        ]);

        $image = $blog->image;

        if ($request->hasFile('image')) {
            if ($blog->image && Storage::disk('public')->exists($blog->image)) {
                Storage::disk('public')->delete($blog->image);
            }
            $image = $request->file('image')->store('blogs', 'public');
        }

        $blog->update([
            'title'   => $request->title,
            'content' => $request->content,
            'image'   => $image,
        ]);

        return redirect()->route('admin.blog.index')->with('success', 'تم تحديث المقال بنجاح');
    }

    public function destroy($id)
    {
        $blog = BlogPost::findOrFail($id);

        if ($blog->image && Storage::disk('public')->exists($blog->image)) {
            Storage::disk('public')->delete($blog->image);
        }

        $blog->delete();

        return redirect()->route('admin.blog.index')->with('success', 'تم حذف المقال بنجاح');
    }

    public function indexp(Request $request)
    {
        $query = BlogPost::query();

        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%");
            });
        }

        $posts = $query->latest()->paginate(9)->withQueryString();
        return view('mdwna', compact('posts'));
    }

    public function show($id)
    {
        $post = BlogPost::findOrFail($id);
        $related = BlogPost::where('id', '!=', $post->id)->latest()->take(4)->get();

        return view('admin.blog.show', compact('post', 'related'));
    }
}
