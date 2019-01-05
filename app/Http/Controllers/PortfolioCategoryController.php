<?php

namespace App\Http\Controllers;

use App\Portfolio;
use App\PortfolioCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Image;
use File;



class PortfolioCategoryController extends Controller
{
    public function createPortfolio(){
        $categories = PortfolioCategory::all();
        return view('admin.portfolio.createPortfolio', compact('categories'));
    }

    public function storePortfolio(Request $request){
        $portfolio = new Portfolio();
        $data = $request->all();
        if($request->hasFile('image')){
            $image_tmp = Input::file('image');
            if($image_tmp->isValid()){
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(77,777).'.'.$extension;
                $large_image_path = 'public/adminpanel/uploads/portfolio/'.$filename;
                Image::make($image_tmp)->save($large_image_path);
                $portfolio->image = $filename;
            }
        }
        $portfolio->name = ucwords(strtolower($data['name']));
        $portfolio->portfolio_category_id = $data['portfolio_category_id'];
        $portfolio->save();
        return redirect()->route('viewPortfolio')->with('flash_message_info','Portfolio Inserted Successfully');
    }

    public function viewPortfolio(){
        $portfolio = Portfolio::all();
        $categories = PortfolioCategory::all();

        return view('admin.portfolio.viewPortfolio',compact('portfolio', 'categories'));
    }

    public function editPortfolio($id){
        $port = Portfolio::findOrFail($id);
        $categories = PortfolioCategory::all();

        return view('admin.portfolio.editPortfolio',compact('port', 'categories'));
    }

    public function updatePortfolio(Request $request,$id){
        $port = Portfolio::findOrFail($id);
        $data = $request->all();
        if($request->hasFile('image')){
            $image_tmp = Input::file('image');
            if($image_tmp->isValid()){
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(77,777).'.'.$extension;
                $large_image_path = 'public/adminpanel/uploads/portfolio/'.$filename;
                Image::make($image_tmp)->save($large_image_path);
                $port->image = $filename;
            }
        }
        $port->name = ucwords(strtolower($data['name']));
        $port->portfolio_category_id = $data['portfolio_category_id'];
        $port->save();
        return redirect()->route('viewPortfolio')->with('flash_message_info','Portfolio Updated Successfully');
    }

    public function deletePortfolio($id){
        $port = Portfolio::findOrFail($id);
        $port->delete();
        return redirect()->route('viewPortfolio')->with('flash_message_danger','Portfolio Deleted Successfully');
    }
}
