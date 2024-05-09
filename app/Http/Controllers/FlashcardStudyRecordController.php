<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFlashcardStudyRecordRequest;
use App\Http\Requests\UpdateFlashcardStudyRecordRequest;
use App\Models\FlashcardStudyRecord;
use Carbon\Carbon;

class FlashcardStudyRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFlashcardStudyRecordRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFlashcardStudyRecordRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FlashcardStudyRecord  $flashcardStudyRecord
     * @return \Illuminate\Http\Response
     */
    public function show(FlashcardStudyRecord $flashcardStudyRecord)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FlashcardStudyRecord  $flashcardStudyRecord
     * @return \Illuminate\Http\Response
     */
    public function edit(FlashcardStudyRecord $flashcardStudyRecord)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFlashcardStudyRecordRequest  $request
     * @param  \App\Models\FlashcardStudyRecord  $flashcardStudyRecord
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFlashcardStudyRecordRequest $request, FlashcardStudyRecord $flashcardStudyRecord)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FlashcardStudyRecord  $flashcardStudyRecord
     * @return \Illuminate\Http\Response
     */
    public function destroy(FlashcardStudyRecord $flashcardStudyRecord)
    {
        //
    }


    public function test() {
        $studyRecords = FlashcardStudyRecord::where('user_id', '=', auth()->id())->where('next_test_date', '<', Carbon::now())->orWhereNull('next_test_date')->with('flashcard')->get()->toArray();

        return view('study_record_test_new' ,['flashcardStudyRecordsJSON' => json_encode($studyRecords)]);
    }

    public function pass() {
        $flashcard_study_record = FlashcardStudyRecord::find(request()->id);
        $flashcard_study_record->study_level =  $flashcard_study_record->study_level + 1;
        $flashcard_study_record->last_tested = Carbon::now();
        $flashcard_study_record->next_test_date = Carbon::now()->addMinutes(pow(2,$flashcard_study_record->study_level)); 
    
        $flashcard_study_record->save();
    }

    public function fail() {
        $flashcard_study_record = FlashcardStudyRecord::find(request()->id);
        $flashcard_study_record->study_level =  max($flashcard_study_record->study_level - 1, 0);
        $flashcard_study_record->last_tested = Carbon::now();
        $flashcard_study_record->next_test_date = Carbon::now();
    
        $flashcard_study_record->save();
    }

}
