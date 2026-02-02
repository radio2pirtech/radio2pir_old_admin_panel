<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class FrontendStoreController extends Controller
{
    /**
     * Handle the display of a specific store.
     */
    public function show(string $slug, Request $request)
    {
        if ($slug === 'admin') {
            return redirect('admin/login');
        }

        $store = Store::where('store_slug', $slug)->first();

        if (!$store) {
            abort(404);
        }

        $this->updateVisitCount($store, $request);

        // Custom views for specific stores
        $customStores = [
            'chappan', 'boxpark', 'snops', 'gourmesserie', 
            'anytimefitness', 'delhibuses', 'shivam', 'anytimefitnesstrial',
            'teapost'
        ];

        if (in_array($slug, $customStores)) {
            return view("online_stores.{$slug}.index", ['page' => $store]);
        }

        // Fallback for generic stores
        return view('frontStore1', ['page' => $store]);
    }

    /**
     * Legacy route handler for /1/{slug}
     */
    public function showLegacy(string $slug, Request $request)
    {
        if ($slug === 'admin') {
            return redirect('admin/login');
        }

        $store = Store::where('store_slug', $slug)->first();

        if (!$store) {
            abort(404);
        }

        $this->updateVisitCount($store, $request);

        return view('frontStore', ['page' => $store]);
    }

    /**
     * Increment visit counts based on source (QR or Direct)
     */
    private function updateVisitCount(Store $store, Request $request): void
    {
        if ($request->has('qrscan')) {
            $store->increment('qr_visited');
            // We decrease 'visited' because it might have been incremented by a global counter or we want to balance it
            // Assuming current logic wants to track separately
            $store->decrement('visited'); 
        } else {
            $store->increment('visited');
        }
    }
}
