<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateHotspotZoneRequest;
use App\Http\Requests\UpdateHotspotZoneRequest;
use App\Repositories\HotspotZoneRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class HotspotZoneController extends AppBaseController
{
    /** @var  HotspotZoneRepository */
    private $hotspotZoneRepository;

    public function __construct(HotspotZoneRepository $hotspotZoneRepo)
    {
        $this->hotspotZoneRepository = $hotspotZoneRepo;
    }

    /**
     * Display a listing of the HotspotZone.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $hotspotZones = $this->hotspotZoneRepository->all();

        return view('hotspot_zones.index')
            ->with('hotspotZones', $hotspotZones);
    }

    /**
     * Show the form for creating a new HotspotZone.
     *
     * @return Response
     */
    public function create()
    {
        return view('hotspot_zones.create');
    }

    /**
     * Store a newly created HotspotZone in storage.
     *
     * @param CreateHotspotZoneRequest $request
     *
     * @return Response
     */
    public function store(CreateHotspotZoneRequest $request)
    {
        $input = $request->all();

        $hotspotZone = $this->hotspotZoneRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/hotspotZones.singular')]));

        return redirect(route('hotspotZones.index'));
    }

    /**
     * Display the specified HotspotZone.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $hotspotZone = $this->hotspotZoneRepository->find($id);

        if (empty($hotspotZone)) {
            Flash::error(__('messages.not_found', ['model' => __('models/hotspotZones.singular')]));

            return redirect(route('hotspotZones.index'));
        }

        return view('hotspot_zones.show')->with('hotspotZone', $hotspotZone);
    }

    /**
     * Show the form for editing the specified HotspotZone.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $hotspotZone = $this->hotspotZoneRepository->find($id);

        if (empty($hotspotZone)) {
            Flash::error(__('messages.not_found', ['model' => __('models/hotspotZones.singular')]));

            return redirect(route('hotspotZones.index'));
        }

        return view('hotspot_zones.edit')->with('hotspotZone', $hotspotZone);
    }

    /**
     * Update the specified HotspotZone in storage.
     *
     * @param int $id
     * @param UpdateHotspotZoneRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHotspotZoneRequest $request)
    {
        $hotspotZone = $this->hotspotZoneRepository->find($id);

        if (empty($hotspotZone)) {
            Flash::error(__('messages.not_found', ['model' => __('models/hotspotZones.singular')]));

            return redirect(route('hotspotZones.index'));
        }

        $hotspotZone = $this->hotspotZoneRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/hotspotZones.singular')]));

        return redirect(route('hotspotZones.index'));
    }

    /**
     * Remove the specified HotspotZone from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $hotspotZone = $this->hotspotZoneRepository->find($id);

        if (empty($hotspotZone)) {
            Flash::error(__('messages.not_found', ['model' => __('models/hotspotZones.singular')]));

            return redirect(route('hotspotZones.index'));
        }

        $this->hotspotZoneRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/hotspotZones.singular')]));

        return redirect(route('hotspotZones.index'));
    }
}
