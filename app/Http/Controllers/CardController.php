<?php

namespace App\Http\Controllers;

use App\Models\card;
use App\Http\Requests\StorecardRequest;
use App\Http\Requests\UpdatecardRequest;
use App\Models\cardHasScrenshoot;
use Illuminate\Http\Request;

class CardController extends Controller
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
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


       $request->validate([
           'name' => 'required',
           'service_type' => 'required',
           'card_type' => 'required',
           'role_of_token' => 'required',
           'sale_start' => 'required|date',
           'sale_end' => 'required|date|after:sale_start',
           'previous_price' => 'required',
           'ico_token_price' => 'required',
           'banner_image' => 'required',
           'logo' => 'required',
           'token_type' => 'required'
       ]);


       $card =  new card;
       $card->name = $request->name;
       $card->service_type = $request->service_type;
       $card->card_type = $request->card_type;
       $card->description = $request->discription;

       if(!is_null($request->importand_notice)){
            $card->importand_notice = $request->importand_notice;
       }


       $logoName = time() . '_logo_' . $request->logo->getClientOriginalName();
       $request->logo->move(public_path('images'), $logoName);

       $newNameLogo = route('index').'/images' .'/' . $logoName;
       $card->logo = $newNameLogo;  


       $bannerName = time(). '_banner_' . $request->banner_image->getClientOriginalName();
       $request->banner_image->move(public_path('images'), $bannerName);

       $newNameBanner = route('index').'/images' .'/' . $bannerName;
       $card->banner_image = $newNameBanner; 

       $card->sale_start = date('Y-m-d H:i:s', strtotime($request->sale_start));
       $card->sale_end = date('Y-m-d H:i:s', strtotime($request->sale_end));


       $current_price = $request->price;
       $prev_price = $request->previous_price;

       $card->price = $current_price;
       $card->previous_price = $prev_price;
       $card->ico_token_price = $request->ico_token_price;

       $increse = $current_price - $prev_price;
       $parcent = $increse / $prev_price * 100;
       $card->diffrent_parcent = $parcent;

       $card->role_of_token = $request->role_of_token;
       $card->token_type = $request->token_type;



       // null requestes

       if(!is_null($request->website_link)){
            $card->website_link = $request->website_link;
       }

       if(!is_null($request->whitepaper)){
        $card->whitepaper = $request->whitepaper;
       }
        
        if(!is_null($request->usd_fund_goal)){
         $card->usd_fund_goal = $request->usd_fund_goal;
        }


        if(!is_null($request->total_tokens)){
            $card->total_tokens = $request->total_tokens;
           }

           $card->save();
        


        // saving screnshots 

        $allScrenshots = $request->screenshots;
        $allScrenshotNames = $request->screenshotName;

        if(!is_null($allScrenshots)){
            foreach ($allScrenshots as $key => $screnshot) {

                $cardHasScrenshot = new cardHasScrenshoot;
                $cardHasScrenshot->card_id = $card->id;
                $cardHasScrenshot->name = $allScrenshotNames[$key];


                $screnshotName = time() . '_scrnshot_' . $screnshot->getClientOriginalName();
                $screnshot->move(public_path('images/screenshots'), $screnshotName);
         
                $newNameScrenshto = route('index').'/images/screenshots' .'/' . $screnshotName;
                $cardHasScrenshot->image = $newNameScrenshto;  


                $cardHasScrenshot->save();
        }
            
    }


        return back()->withSuccess("Card Created Successfully");


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\card  $card
     * @return \Illuminate\Http\Response
     */
    public function show(card $card)
    {
        return $card;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\card  $card
     * @return \Illuminate\Http\Response
     */
    public function edit(card $card)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecardRequest  $request
     * @param  \App\Models\card  $card
     * @return \Illuminate\Http\Response
     */
    public function update($card_id)
    {
        $card = card::find($card_id);
        return view('admin.update', compact('card'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\card  $card
     * @return \Illuminate\Http\Response
     */
    public function destroy($card_id)
    {
        $card = card::find($card_id);
        $cardhasScrenshots = cardHasScrenshoot::where('card_id', $card_id)->get();
        if(!$cardhasScrenshots->isEmpty()){
            $cardhasScrenshots->delete();
        }
        $card->delete();
        return back()->withSuccess("card has been deleted");

    }

    public function showDetails($card_id)
    {
       $card = card::with('screnshots')->find($card_id);
       return view('frontend.singleCard', compact('card'));
    }

    public function archived()
    {
        $cards =  card::where('sale_end', '<', now()->format('Y-m-d H:i:s'))->get();
        return view('admin.archived', compact('cards'));
    }



    public function saveUpdate(Request $request)
    {
        $request->validate([
            'card_id' => 'required',
            'name' => 'required',
            'service_type' => 'required',
            'card_type' => 'required',
            'role_of_token' => 'required',
            'sale_start' => 'required|date',
            'sale_end' => 'required|date|after:sale_start',
            'previous_price' => 'required',
            'ico_token_price' => 'required',
            'banner_image' => 'required',
            'logo' => 'required',
            'token_type' => 'required'
        ]);


        $cardHasScrenshots = cardHasScrenshoot::where('card_id', $request->card_id)->get();
        if(!$cardHasScrenshots->isEmpty()){
            $cardHasScrenshots->delete();
        }


        $card = card::find($request->card_id);
        $card->name = $request->name;
        $card->service_type = $request->service_type;
        $card->card_type = $request->card_type;
        $card->description = $request->discription;
 
        if(!is_null($request->importand_notice)){
             $card->importand_notice = $request->importand_notice;
        }
 
 
        $logoName = time() . '_logo_' . $request->logo->getClientOriginalName();
        $request->logo->move(public_path('images'), $logoName);
 
        $newNameLogo = route('index').'/images' .'/' . $logoName;
        $card->logo = $newNameLogo;  
 
 
        $bannerName = time(). '_banner_' . $request->banner_image->getClientOriginalName();
        $request->banner_image->move(public_path('images'), $bannerName);
 
        $newNameBanner = route('index').'/images' .'/' . $bannerName;
        $card->banner_image = $newNameBanner; 
 
        $card->sale_start = date('Y-m-d H:i:s', strtotime($request->sale_start));
        $card->sale_end = date('Y-m-d H:i:s', strtotime($request->sale_end));
 
 
        $current_price = $request->price;
        $prev_price = $request->previous_price;
 
        $card->price = $current_price;
        $card->previous_price = $prev_price;
        $card->ico_token_price = $request->ico_token_price;
 
        $increse = $current_price - $prev_price;
        $parcent = $increse / $prev_price * 100;
        $card->diffrent_parcent = $parcent;
 
        $card->role_of_token = $request->role_of_token;
        $card->token_type = $request->token_type;
 
 
 
        // null requestes
 
        if(!is_null($request->website_link)){
             $card->website_link = $request->website_link;
        }
 
        if(!is_null($request->whitepaper)){
         $card->whitepaper = $request->whitepaper;
        }
         
         if(!is_null($request->usd_fund_goal)){
          $card->usd_fund_goal = $request->usd_fund_goal;
         }
 
 
         if(!is_null($request->total_tokens)){
             $card->total_tokens = $request->total_tokens;
            }
 
            $card->save();
         
 
 
         // saving screnshots 
 
         $allScrenshots = $request->screenshots;
         $allScrenshotNames = $request->screenshotName;
 
         if(!is_null($allScrenshots)){
             foreach ($allScrenshots as $key => $screnshot) {
 
                 $cardHasScrenshot = new cardHasScrenshoot;
                 $cardHasScrenshot->card_id = $card->id;
                 $cardHasScrenshot->name = $allScrenshotNames[$key];
 
 
                 $screnshotName = time() . '_scrnshot_' . $screnshot->getClientOriginalName();
                 $screnshot->move(public_path('images/screenshots'), $screnshotName);
          
                 $newNameScrenshto = route('index').'/images/screenshots' .'/' . $screnshotName;
                 $cardHasScrenshot->image = $newNameScrenshto;  
 
 
                 $cardHasScrenshot->save();
         }
             
     }
 
 
         return back()->withSuccess("Card updated Successfully");




    }
}
