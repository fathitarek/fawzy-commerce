<?php

namespace App\Http\Controllers;

use App\DataTables\projectsDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateprojectsRequest;
use App\Http\Requests\UpdateprojectsRequest;
use App\Repositories\projectsRepository;
use App\Http\Controllers\AppBaseController;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Response;
use App\galleryProjects;
use Illuminate\Support\Facades\Input;

class projectsController extends AppBaseController
{
    /** @var  projectsRepository */
    private $projectsRepository;

    public function __construct(projectsRepository $projectsRepo)
    {
        $this->projectsRepository = $projectsRepo;
    }
    function saveFile($image , $directory)
    {
         $filename = str_random(6).'_'.time() . "." . $image->getClientOriginalExtension();
        //$filename = $image->getClientOriginalName();
        $path = public_path() . $directory ;
        $image->move($directory , $filename);
        return $filename;
    }
    
    /**
     * Display a listing of the projects.
     *
     * @param projectsDataTable $projectsDataTable
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function index(projectsDataTable $projectsDataTable)
    {
        return $projectsDataTable->render('projects.index');
    }

    /**
     * Show the form for creating a new projects.
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created projects in storage.
     *
     * @param CreateprojectsRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function store(CreateprojectsRequest $request)
    {
        $input = $request->all();
        $destination = 'images/gallary_projects';

        $projects = $this->projectsRepository->create($input);
        if(!is_null($input['images'])&&isset($input['images'])){
            foreach ($input['images'] as $index => $image){
                $filename = $this->saveFile($image ,$destination) ;
                if(isset($input['images'])){
                    $product_image = galleryProjects::create(['images' =>$destination.'/'.$filename,'project_id'=>$projects->id]);
                }else{
                    $input['images'] = $filename;
                }
            }
            
        }
        Flash::success('Projects saved successfully.');

        return redirect(route('projects.index'));
    }

    /**
     * Display the specified projects.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function show($id)
    {
        $projects = $this->projectsRepository->find($id);
        $images=galleryProjects::where('project_id',$id)->get();

        if (empty($projects)) {
            Flash::error('Projects not found');

            return redirect(route('projects.index'));
        }

        return view('projects.show')->with('projects', $projects)->with('images',$images);
    }

    /**
     * Show the form for editing the specified projects.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function edit($id)
    {
        $projects = $this->projectsRepository->find($id);
        $images=galleryProjects::where('project_id',$id)->get();

        if (empty($projects)) {
            Flash::error('Projects not found');

            return redirect(route('projects.index'));
        }

        return view('projects.edit')->with('projects', $projects)->with('images',$images);
    }

    /**
     * Update the specified projects in storage.
     *
     * @param  int              $id
     * @param UpdateprojectsRequest $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function update($id, UpdateprojectsRequest $request)
    {
        $projects = $this->projectsRepository->find($id);
        $destination = 'images/gallary_projects';

        if(!is_null($request->images)&&isset($request->images)){
            foreach ($request->images as $index => $image){
                 // dd($image);
                $filename = $this->saveFile($image ,$destination);
                if(isset($request->images)){
                    $product_image = galleryProjects::create(['images' =>$destination.'/'.$filename,'project_id'=>$id]);
                }else{
                    $request->images= $filename;
                }
            }
            
        }
        if (empty($projects)) {
            Flash::error('Projects not found');

            return redirect(route('projects.index'));
        }

        $projects = $this->projectsRepository->update($request->all(), $id);

        Flash::success('Projects updated successfully.');

        return redirect(route('projects.index'));
    }

    /**
     * Remove the specified projects from storage.
     *
     * @param  int $id
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function destroy($id)
    {
        $projects = $this->projectsRepository->find($id);

        if (empty($projects)) {
            Flash::error('Projects not found');

            return redirect(route('projects.index'));
        }

        $this->projectsRepository->delete($id);

        Flash::success('Projects deleted successfully.');

        return redirect(route('projects.index'));
    }
    public function removeImage($id){
        $delete= galleryProjects::destroy($id);
        return $delete;
   }
}
