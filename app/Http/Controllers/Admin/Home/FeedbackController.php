<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests\FeedbackStoreRequest;
use App\Http\Requests\FeedbackUpdateRequest;
use App\Models\Feedback;
use App\Repositories\FeedbackRepository;

class FeedbackController extends Controller
{

    public function __construct(
        private readonly FeedbackRepository $feedbackRepository
    ) {
    }

    public function index()
    {
        $feedbacks = $this->feedbackRepository->paginated('order');

        return view('admin.home.feedbacks.index', compact('feedbacks'));
    }

    public function create()
    {
        return view('admin.home.feedbacks.create');
    }

    public function store(FeedbackStoreRequest $request)
    {
        $this->feedbackRepository->create($request->validated());

        return redirect()->route('admin.home.feedbacks.index');
    }

    public function edit(Feedback $feedback)
    {
        return view('admin.home.feedbacks.edit', compact('feedback'));
    }

    public function update(FeedbackUpdateRequest $request, Feedback $feedback)
    {
        $this->feedbackRepository->updateBy($feedback, $request->validated());

        session()->flash('status', 'Đã lưu thành công.');

        return redirect()->route('admin.home.feedbacks.edit', $feedback);
    }

    public function destroy(Feedback $feedback)
    {
        $feedback->delete();

        return redirect()->route('admin.home.feedbacks.index');
    }
}
