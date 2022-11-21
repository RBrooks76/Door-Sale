<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\Cabinets;
use App\Models\CabinetsPrice;
use App\Models\Capping;
use App\Models\DoorCategory;
use App\Models\DoorFinishOther;
use App\Models\DoorHardware;
use App\Models\DoorHardwareSecond;
use App\Models\DoorMaterial;
use App\Models\DoorMaterialPrice;
use App\Models\DoorMullon;
use App\Models\DoorPriceIncrease;
use App\Models\DoorPricing;
use App\Models\DoorStyle;
use App\Models\FingerPull;
use App\Models\Finish;
use App\Models\HingeCount;
use App\Models\HingePrice;
use App\Models\JPULL;
use App\Models\MaterialDoors;
use App\Models\PaintedDoorOrderContent;
use App\Models\PaintedDoorOrderTitle;
use App\Models\PaintOnly;
use App\Models\PanelOption;
use App\Models\PricingParameters;
use App\Models\User;
use Illuminate\Contracts\Session\Session as SessionSession;
use Mockery\Undefined;
use Session;

class DashboardController extends Controller
{
    //

    public function toHome(){
        $header = "home";
        $session = Session::get('email');

        return view('Dashboard.index',[
            'header'    => $header,
            'isLogin'   => $session,
        ]);
    }

    public function toDesign(){
        $header = "design";
        $session = Session::get('email');
        return view('Design.index', [
            'header'    => $header,
            'isLogin'   => Session::get('email'),
        ]);
    }

    public function toDesignDetail($type){
        $header = "design";
        if($type == 'a'){
            return view('Design.detail.type_a', [
                'header'    => $header,
                'isLogin'   => Session::get('email'),
            ]);
        } else if($type == 'b'){
            return view('Design.detail.type_b', [
                'header'    => $header,
                'isLogin'   => Session::get('email'),
            ]);
        }else if($type == 'br'){
            return view('Design.detail.type_br', [
                'header'    => $header,
                'isLogin'   => Session::get('email'),
            ]);
        }else if($type == 'c'){
            return view('Design.detail.type_c', [
                'header'    => $header,
                'isLogin'   => Session::get('email'),
            ]);
        }else if($type == 'd'){
            return view('Design.detail.type_d', [
                'header'    => $header,
                'isLogin'   => Session::get('email'),
            ]);
        }
    }

    public function toContact(){
        $header = "contact";
        return view('Contact.index', [
            'header'    => $header,
            'isLogin'   => Session::get('email'),
        ]);
    }

    public function toProjects(){
        $header = "projects";
        return view('Projects.index', [
            'header'    => $header,
            'isLogin'   => Session::get('email'),
        ]);
    }

    public function toLogin(){
        return view('Auth.login');
    }

    public function toSignup(){
        return view('Auth.signup');
    }


//// Cabinet Order
    public function toCabinetOrder(){
        $header = "forms";
        $cabinets = Cabinets::get();
        $finish = Finish::get();
        $material_doors = DoorMaterialPrice::get();
        return view('Form.cabinet', [
            'header'    => $header,
            'cabinets'  => $cabinets,
            'finish'    => $finish,
            'material'  => $material_doors,
        ]);
    }

    // public function onOrderForm(Request $request){
    //     $valid = $request->validate([
    //             "ordered_date"      => 'required',
    //             "required_date"     => 'required',
    //             "customer"          => 'required',
    //             'order_number'      => 'required',
    //             "delivery_address"  => 'required',
    //             "door_design"       => 'required',
    //             "telephone"         => 'required',
    //             "edge_profile"      => 'required',
    //             "fax"               => 'required',
    //             "door_colour"       => 'required',
    //             "contact_person"    => 'required',
    //             "one_two"           => 'required',
    //             "cabinet_type"      => 'required',
    //             "kisks_rail_type"   => 'required',
    //             "door_type"         => 'required',
    //             "drawer_type"       => 'required',
    //             "hinge_type"        => 'required',
    //     ]);

    //     Order::create([
    //             "ordered_date"      => $valid['ordered_date'],
    //             "required_date"     => $valid['required_date'],
    //             "customer"          => $valid['customer'],
    //             "order_number"      => $valid['order_number'],
    //             "delivery_address"  => $valid['delivery_address'],
    //             "door_design"       => $valid['door_design'],
    //             "telephone"         => $valid['telephone'],
    //             "edge_profile"      => $valid['edge_profile'],
    //             "fax"               => $valid['fax'],
    //             "door_color"        => $valid['door_colour'],
    //             "contact_person"    => $valid['contact_person'],
    //             "pvc_edging"        => $valid['one_two'],
    //             "cabinet_type"      => $valid['cabinet_type'],
    //             "kisks_rail_type"   => $valid['kisks_rail_type'],
    //             "door_type"         => $valid['door_type'],
    //             "drawer_type"       => $valid['drawer_type'],
    //             "hinge_type"        => $valid['hinge_type'],
    //     ]);

    //     return redirect()->route('toOrder');

    // }



//// Benchtop Order
    public function toBenchtopOrder(){
        $header = 'forms';
        return view('Form.benchtop', [
            'header'    => $header,
        ]);
    }

////
    public function onChangeCabinet(Request $request){
        ////////////////////////////////////////////
        $back_id = 5; // tbl_cabintes_tag->'Back Qty'
        $back_index = CabinetsPrice::where('tag_id', $back_id)
                                    ->where('cabinet_id', $request->name)
                                    ->first('value');
        $back = $request->height * $request->width / 1000000 * $request->qty * intval($back_index->value);

        $horizontal_id = 3;
        $horizontal_index = CabinetsPrice::where('tag_id', $horizontal_id)
                                    ->where('cabinet_id', $request->name)
                                    ->first('value');
        $horizontal = $request->depth * $request->width / 1000000 * $request->qty * (intval($horizontal_index->value) + intval($request->row));

        $vertical_id = 4;
        $vertical_index = CabinetsPrice::where('tag_id', $vertical_id)
                                    ->where('cabinet_id', $request->name)
                                    ->first('value');
        $vertical = $request->depth * $request->height / 1000000 * $request->qty * (intval($vertical_index->value) + intval($request->col));

        $wastage = PricingParameters::where('name', 'wastage')->first('content');
        $E = ($back + $horizontal + $vertical) * ( 1 + $wastage->content);
        $result['E'] = $E;

        ////////////////////////////////////////////
        $GTemp = DoorMaterialPrice::where('id', $request->size)->first('cum_price');
        $G = intval($GTemp->cum_price);
        $result['G'] = $G;

        $finish_name = Finish::where('id', $request->finish)->first('name');
        $finish_index = str_replace(' ', '_', strtolower($finish_name->name));

        $temp = DoorPricing::where('doors', 'Hayley')->first($finish_index);
        $F = intval($temp[$finish_index]);
        $result['F'] = $F;

        $delivery = 0.12;
        $price_increase = 0.08;
        $H = (intval($F) + intval($G)) * (1 + $price_increase) * (1 + $delivery);
        $result['H'] = $H;

        $standing_fee_id = 1;
        $standing_fee = $request->name == $standing_fee_id ? 150 : 0;
        $result['standing_fee'] = $standing_fee;

        $FN_vertical = CabinetsPrice::where('tag_id', 4)->where('cabinet_id', 1)->first('value');
        $underbench = $request->underbench == 0 ? 2 : 0;
        $hayleyraw = DoorPricing::where('doors', 'Hayley')->first('under_coat');
        $v_point_under_shelf = intval($request->name) != 1 ? 0 : (( intval($FN_vertical->value) - 2 + intval($request->col) - 1 + $underbench ) * (intval($request->height) * intval($request->depth) / 1000000) * ( $F - $hayleyraw->under_coat));
        $result['v_point_under_shelf'] = $v_point_under_shelf;

        $horizontal_qty_shelves = 2;
        $horizontal_qty_shelves_index = CabinetsPrice::where('tag_id', $horizontal_qty_shelves)
                                    ->where('cabinet_id', $request->name)
                                    ->first('value');
        $h_point_under_shelf = $request->name == 2 ? 0 : ((intval($request->width) * intval($request->depth) / 1000000) * ( $F - $hayleyraw->under_coat) * ($horizontal_qty_shelves_index->value + 2 + $request->shelves + $request->row - 1 + $underbench));
        $result['h_point_under_shelf'] = $h_point_under_shelf;

        $amount = ($H * $E) + $h_point_under_shelf + $v_point_under_shelf + $standing_fee;
        $result['amount'] = $amount;

        $sell_price = $amount * ( 1 + 0.25 * 1);
        $result['sell_price'] = $sell_price;
        return response()->json($result);


    }

    public function onGetDoorCategory(Request $request){
        $temp = DoorCategory::where('id', $request->door)->first('name');
        $index = $temp->name;

        $result = [];

        switch($index){
            case 'Doors' :
                $result['finish_style'] = DoorStyle::where('category_id', $request->door)->get();
                $result['finish_material'] = DoorMaterial::where('door_id', $request->door)->get();

                $result['prefix'] = $request->door;

                $result['finish_third'] = 'Edge Detail';
                $result['finish_fourth'] = 'FingerPull';
                $result['finish_fourth_result'] = FingerPull::get();
                $result['finish_fifth'] = 'Paint - D/S';

                $result['hardware_first_title'] = 'Hinge Drill Reference';
                $result['hardware_first'] = DoorHardware::where('door_id', $request->door)->get();
                $result['hardware_second_title'] = 'Type';
                $result['hardware_second'] = DoorHardwareSecond::where('door_id', $request->door)->get();

                $result['dimension_first'] = "Height (mm)";
                $result['dimension_second'] = "Width (mm)";
                $result['dimension_third'] = "Quantity";

                break;
            case 'Drawers' :
                $result['finish_style'] = DoorStyle::where('category_id', $request->door)->get();
                $result['finish_material'] = DoorMaterial::where('door_id', $request->door)->get();

                $result['prefix'] = $request->door;

                $result['finish_third'] = 'Edge Detail';
                $result['finish_fourth'] = 'FingerPull';
                $result['finish_fourth_result'] = FingerPull::get();
                $result['finish_fifth'] = 'Paint - D/S';
                $result['finish_sixth'] = 'Drawer #';

                $result['hardware_first_title'] = 'Configration';
                $result['hardware_first'] = DoorHardware::where('door_id', $request->door)->get();
                // $result['hardware_second_title'] = 'Runner1';
                // $result['hardware_second'] = DoorHardwareSecond::where('door_id', $request->door)->get();
                // $result['hardware_third_title'] = 'Runner2';
                // $result['hardware_third'] = DoorHardwareSecond::where('door_id', $request->door)->get();
                // $result['hardware_fourth_title'] = 'Runner3';
                // $result['hardware_fourth'] = DoorHardwareSecond::where('door_id', $request->door)->get();

                $result['dimension_first'] = "Height (mm)";
                $result['dimension_second'] = "Width (mm)";
                $result['dimension_third'] = "Quantity";

                break;
            case 'Flat Panels' :
                $result['finish_style'] = DoorStyle::where('category_id', $request->door)->get();
                $result['finish_material'] = DoorMaterial::where('door_id', $request->door)->get();

                $result['prefix'] = $request->door;

                $result['hardware_first_title'] = 'Paint Options';
                $result['hardware_first'] = DoorHardware::where('door_id', $request->door)->get();

                $result['dimension_first'] = "Height (mm)";
                $result['dimension_second'] = "Width (mm)";
                $result['dimension_third'] = "Quantity";
                break;
            case 'Frame Doors':
                $result['finish_style'] = DoorStyle::where('category_id', $request->door)->get();
                $result['finish_material'] = DoorMaterial::where('door_id', $request->door)->get();

                $result['prefix'] = $request->door;

                $result['finish_first'] = 'Glass Cutouts';
                $result['finish_first_result'] = DoorFinishOther::where('door_id', $request->door)->get();
                $result['finish_third'] = 'Edge Detail';

                $result['hardware_first_title'] = 'Hinge Drill Reference';
                $result['hardware_first'] = DoorHardware::where('door_id', $request->door)->get();
                $result['hardware_second_title'] = 'Type';
                $result['hardware_second'] = DoorHardwareSecond::where('door_id', $request->door)->get();


                $result['dimension_first'] = "Height (mm)";
                $result['dimension_second'] = "Width (mm)";
                $result['dimension_third'] = "Quantity";
                $result['dimension_fourth'] = "A";

                break;
            case 'Split Panels' :
                $result['finish_style'] = DoorStyle::where('category_id', $request->door)->get();
                $result['finish_material'] = DoorMaterial::where('door_id', $request->door)->get();

                $result['prefix'] = $request->door;

                $result['finish_first'] = 'Split Type';
                $result['finish_first_result'] = DoorFinishOther::where('door_id', $request->door)->get();
                $result['finish_second']  = 'Mullion #';
                $result['finish_second_result'] = DoorMullon::get();
                $result['finish_third']  = 'Edge Detail';
                $result['finish_fourth']  = 'Options';
                $result['finish_fourth_result']  = DoorHardware::where('door_id', $request->door)->get();

                $result['hardware_first_title'] = 'Hinge Drill Reference';
                $result['hardware_first'] = DoorHardware::where('door_id', $request->door)->get();
                $result['hardware_second_title'] = 'Type';
                $result['hardware_second'] = DoorHardwareSecond::where('door_id', $request->door)->get();
                $result['hardware_third_title'] = 'A';
                $result['hardware_fourth_title'] = 'B';

                $result['dimension_first'] = "Height (mm)";
                $result['dimension_second'] = "Width (mm)";
                $result['dimension_third'] = "Quantity";
                break;
            case 'Capping' :
                $result['finish_style'] = DoorStyle::where('category_id', $request->door)->get();
                $result['finish_material'] = DoorMaterial::where('door_id', $request->door)->get();
                $result['finish_material_title'] = "2400 Lengths";
                $result['prefix'] = $request->door;

                break;
            case 'Sample Door' :
                $result['finish_style'] = DoorStyle::where('category_id', $request->door)->get();
                $result['finish_material'] = DoorMaterial::where('door_id', $request->door)->get();

                $result['prefix'] = $request->door;

                $result['finish_third'] = 'Edge Detail';

                break;
            case 'Corbels' :
                $result['finish_style'] = DoorStyle::where('category_id', $request->door)->get();

                $result['prefix'] = $request->door;

                break;
            case 'Columns' :
                $result['finish_style'] = DoorStyle::where('category_id', $request->door)->get();

                $result['prefix'] = $request->door;

                break;

        }

        return $result;
    }

    public function onGetHardwareArray(Request $request){
        return DoorHardwareSecond::where('door_id', $request->category)->get();
    }

//// Calculate Painted Door Order
    public function on_M($param){
        $wastage = PricingParameters::where('name', 'wastage')->first('content');
        if($param->dimension_first != null && $param->dimension_second != null){
            return ($param->dimension_first * $param->dimension_second / 1000000) * (1 + $wastage->content);
        } else {
            return 0;
        }
    }

    public function on_N($param){
        if($param->finish != null && $param->style != null){
            $style_name = DoorStyle::where('id', $param->style)->first('style_name');
            $finish_name = Finish::where('id', $param->finish)->first('name');
            $finish_index = str_replace(' ', '_', strtolower($finish_name->name));
            $tempN = DoorPricing::where('doors', $style_name->style_name)->first($finish_index);
            return $tempN[$finish_index];
        } else {
            return 0;
        }
    }

    public function on_O($param){
        if($param->material != null){
            $material_name = DoorMaterial::where('id', $param->material)->first('name');
            $tempO = DoorMaterialPrice::where('name', $material_name->name)->first('cum_price');
            return $tempO['cum_price'];
        } else {
            return 0;
        }
    }

    public function on_P($param){
        $P = '';
        if($param->category != null && $param->finish_fifth == 1){
            $category_name = DoorCategory::where('id', $param->category)->first('name');

            if($category_name->name == 'Doors' || $category_name->name == 'Drawers'){
                $P = 'D';
            }
        }

        if($param->category && $param->finish_first && $param->finish_fourth){
            $category_name = DoorCategory::where('id', $param->category)->first('name');
            $BP3 = DoorHardware::where('id', $param->finish_fourth)->first('name');
            $BM4 = DoorFinishOther::where('id', $param->finish_first)->first('name');

            if($category_name->name == 'Split Panels' && $BP3->name == "PMDF D/S + All" && $BM4->name != "End Panel Build Up"){
                $P = 'D';
            }
        }

        if($param->category && $param->hardware_first){
            $category_name = DoorCategory::where('id', $param->category)->first('name');
            $temp = DoorHardware::where('id', $param->hardware_first)->first('name');
            $BS1 = PanelOption::where('flat_panels', $temp->name)->first('code');
            if($category_name->name == 'Flat Panels' && $BS1){
                $P = $BS1->code;
            }
        }

        return $P;
    }

    public function on_R($param){
        if($param->category != null){
            $temp = DoorPriceIncrease::where('door_id', $param->category)->first('dec_pi');
            return $temp->dec_pi / 100;
        } else {
            return 0;
        }
    }

    public function on_S($N, $O, $R, $delivery){
        return (( $N + $O ) * (1 + $R)) * ( 1 +  $delivery);
    }

    public function on_T($M, $S, $param){
        if($param->dimension_third){
            return $M * $S * $param->dimension_third;
        } else {
            return 0;
        }
    }

    public function on_U($P, $param){
        if($param->finish && $param->dimension_first && $param->dimension_second && $param->dimension_third){
           $BM3 = PaintOnly::where('id', $param->finish)->first('paint_only');
           $U_1 = ($P == 'D' ? $BM3->paint_only * ( $param->dimension_first * $param->dimension_second / 1000000 *  $param->dimension_third ) : 0);
           $U_2 = ($P == 'Q' ? $BM3->paint_only * ( $param->dimension_first * 100 / 1000000 *  $param->dimension_third ) : 0);
           $U_3 = ($P == 'U' ? $BM3->paint_only * ( $param->dimension_first * 100 / 1000000 *  $param->dimension_third ) : 0);
           return $U_1 + $U_2 + $U_3;
        } else {
           return 0;
        }
   }

    public function on_V($param){
        if($param->finish_first != null && $param->category != null &&$param->dimension_third){
            $GlassCutoutPrice_index = str_replace(' ', '_', strtolower('Glass Cutout'));
            $GlassCutoutPrice = PricingParameters::where('name', $GlassCutoutPrice_index)->first('content');
            $BM4 = DoorFinishOther::where('id', $param->finish_first)->first('name');
            $category_name = DoorCategory::where('id', $param->category)->first('name');
            return $category_name->name == 'Frame Doors' ? $GlassCutoutPrice->content * $BM4->name * $param->dimension_third : 0;
        } else {
            return 0;
        }
    }

    public function on_W($param){
        if($param->style != null && $param->category != null && $param->finish_fourth != null && $param->finish_sixth != null && $param->dimension_third != null){
            $jpull_rate = PricingParameters::where('name', 'jpull_rate')->first('content');
            $fingerpull_rate = PricingParameters::where('name', 'fingerpull_rate')->first('content');
            $style_name = DoorStyle::where('id', $param->style)->first('style_name');
            $category_name = DoorCategory::where('id', $param->category)->first('name');
            $temp1 = $style_name->style_name == 'JPull' ? $jpull_rate->content : $fingerpull_rate->content;
            $temp2 = $category_name->name == 'Drawers' ? $param->finish_sixth : 1;
            // $temp4 = 0;
            $BP3 = FingerPull::where('id', $param->finish_fourth)->first('name');
            if((($category_name->name == 'Doors' && $style_name->style_name == 'JPull') || ($category_name->name == 'Drawers' && $style_name->style_name == 'JPull')) && ($BP3->name != 'None' && $BP3->name != 0)){
                $temp4 = 1;
            }

            return $temp1 * $temp2 * $param->dimension_third;// * $temp4;

        } else {
            return 0;
        }
    }

    public function on_X($param){
        if($param->category != null && $param->dimension_first){
            $category_name = DoorCategory::where('id', $param->category)->first('name');
            if($category_name->name == 'Doors' || $category_name->name == 'Frame Doors' || $category_name->name == 'Split Panels' ){
                $X = HingeCount::where('height', '<', $param->dimension_first)->orderBy('height', 'DESC')->first('number');
                return $X->number;
            } else {
                return 0;
            }
        } else {
            return 0;
        }
    }

    public function on_Y($param, $X){
        if($param->hardware_first != null  && $param->hardware_second != null){
            $Quantity = 10;
            $temp_BS = DoorHardware::where('id', $param->hardware_first)->first('name');
            $BS_left = $temp_BS->name == 'Left Drill' ? 1 : 0;
            $BS_right = $temp_BS->name == 'Right Drill' ? 1 : 0;
            $BS_left_2 = $temp_BS->name == 'Left Drill & Supply' ? 1 : 0;
            $BS_right_2 = $temp_BS->name == 'Right Drill & Supply' ? 1 : 0;
            $temp_hinge = DoorHardwareSecond::where('id', $param->hardware_second)->first('name');
            $temp_hingeprice = HingePrice::where('hinge_type', $temp_hinge->name)->first('price');
            $HingeDrillingRate_index = str_replace(' ', '_', strtolower('Hinge Drilling Rate'));
            $HingeDrillingRate = PricingParameters::where('name', $HingeDrillingRate_index)->first('content');
            $Y = ($HingeDrillingRate->content * $BS_left * $Quantity * $X) + ($HingeDrillingRate->content * $BS_right * $Quantity * $X) + ($temp_hingeprice->price * $BS_left_2 * $Quantity * $X) * ($temp_hingeprice->price * $BS_right_2 * $Quantity * $X);


            return $Y;
        } else {
            return 0;
        }

    }

    public function on_Z($param){
        if($param->category && $param->finish_sixth && $param->dimension_third){
            $category_name = DoorCategory::where('id', $param->category)->first('name');
            $cnt = 0;

            if(!$param->hardware_second && !$param->hardware_third && !$param->hardware_fourth && !$param->hardware_fifth ){
                return 0;
            }

            $hardware = [$param->hardware_second, $param->hardware_third, $param->hardware_fourth, $param->hardware_fifth];

            for( $i = 0; $i < $param->finish_sixth; $i++){
                $temp = DoorHardwareSecond::where('id', $hardware[$i])->first('name');
                if(str_contains($temp->name, 'Antaro')){
                    $cnt ++;
                }
            }

            $DrawerDrillingRate_index = str_replace(' ', '_', strtolower('Drawer Drilling Charge'));
            $DrawerDrillingRate = PricingParameters::where('name', $DrawerDrillingRate_index)->first('content');
            if($category_name->name == 'Drawers'){
                return $DrawerDrillingRate->content * $param->dimension_third * $cnt;
            } else {
                return 0;
            }
        } else {
            return 0;
        }
    }

    public function on_AA($param){
        if($param->finish != null && $param->finish_first && $param->dimension_first != null &&  $param->dimension_second != null &&  $param->dimension_third != null ){
            $hours = 4;
            $hourly_rate = 91.8;
            $flat_panel_price = 135;
            $BM2_index = Finish::where('id', $param->finish)->first('name');
            $BM2_1 = $BM2_index->name == 'Raw' ? 0.6 : 1;
            $BM2_2 = $BM2_index->name == 'Raw' ? 0 : 1;
            $BM4 = DoorFinishOther::where('id', $param->finish_first)->first('name');

            if($BM4->name == 'End Panel Build Up'){
                return (($hours * $hourly_rate * $param->dimension_third * $BM2_1) + ($flat_panel_price * $param->dimension_first * $param->dimension_second * $param->dimension_third / 1000000) * $BM2_2);
            } else {
                return 0;
            }

        } else {
            return 0;
        }
    }

    public function on_AB($param, $T, $U, $V, $W, $Y, $Z, $AA){
        if($param->category){
            $category_name = DoorCategory::where('id', $param->category)->first('name');
            if($category_name->name == 'Sample Door' || $category_name->name == ''){
                return 0;
            } else {
                return $T + $W + $Y + $U + $V + $Z + $AA;
            }
        } else {
            return 0;
        }
    }

    public function on_AD($AB, $AC, $marginflag, $param){
        $temp_AD1 = 0;
        $temp_AD2 = 0;
        $temp_AD3 = 0;
        $temp_AD4 = 0;
        if($param->category){

            $category_name = DoorCategory::where('id', $param->category)->first('name');
            if($category_name->name != 'Capping' && $category_name->name != 'Corbel' && $category_name != 'columns'){
                $temp_AD1 = $AB * (1 + $AC * $marginflag);
            }

            if($category_name->name == "Capping" && $param->material && $param->style){
                $BP1 = DoorMaterial::where('id', $param->material)->first('name');
                $style_name = DoorStyle::where('id', $param->style)->first('style_name');
                $temp = Capping::where('capping', $style_name->name)->first('price');
                $BM3 = $style_name->name == 'Raw' ? 0.5 : 1;
                $temp_AD2 = $BP1->name * $temp->price * $BM3;
            }

            if($category_name->name == 'Corbel' && $param->style && $param->dimension_quantity){
                $style_name = DoorStyle::where('id', $param->style)->first('style_name');
                $temp = Capping::where('capping', $category_name->name)->first('price');
                $BM3 = $style_name->name == 'Raw' ? 0.5 : 1;
                $temp_AD3 = $param->dimension_quantity * $temp * $BM3;
            }

            if($category_name->name == 'Columns' && $category_name->name != 'SZ Cabinets' && $param->dimension_third){
                $BM3 = $style_name->name == 'Raw' ? 0.5 : 1;
                $temp = Capping::where('capping', $category_name->name)->first('price');
                $temp_AD4 = $BM3 * $temp * $param->dimension_third;
            }

            return $temp_AD1 + $temp_AD2 + $temp_AD3 + $temp_AD4;
        }



    }

    public function on_AN(){
        // comming soon.
    }

    public function onCalculation(Request $request){
        // print_r($request);
        // die();
        $display = [];
        $M = 0;
        $N = 0;
        $O = 0;
        $P = 0;
        $R = 0;
        $S = 0;
        $T = 0;
        $U = 0;
        $V = 0;
        $W = 0;
        $X = 0;
        $Y = 0;
        $Z = 0;
        $AA = 0;
        $AB = 0;
        $delivery = 0.12;
        $maringflag_index = str_replace(' ', '_', strtolower('Margin Flag'));
        $marginflag = PricingParameters::where('name', $maringflag_index)->first('content');

        $M = $this->on_M($request);
        $N = $this->on_N($request);
        $O = $this->on_O($request);
        $P = $this->on_P($request);
        $R = $this->on_R($request);
        $S = $this->on_S($N, $O, $R, $delivery);
        $T = $this->on_T($M, $S, $request);
        $U = $this->on_U($P, $request);
        $V = $this->on_V($request);
        $W = $this->on_W($request);
        $X = $this->on_X($request);
        $Y = $this->on_Y($request, $X);
        $Z = $this->on_Z($request);
        $AA = $this->on_AA($request);
        $AB = $this->on_AB($request, $T, $U, $V, $W, $Y, $Z, $AA);
        // $AD = $this->on_AD($AB, $AC, $marginflag, $request);

        $display['M'] = $M;
        $display['N'] = $N;
        $display['O'] = $O;
        $display['P'] = $P;
        $display['R'] = $R;
        $display['S'] = $S;
        $display['T'] = $T;
        $display['U'] = $U;
        $display['V'] = $V;
        $display['W'] = $W;
        $display['X'] = $X;+
        $display['Y'] = $Y;
        $display['Z'] = $Z;
        $display['AA'] = $AA;
        $display['AB'] = $AB;
        // $display['AD'] = $AD;
        // return $display;

        $state_value = $AB;
        return $state_value;


    }

//// Painted Door Order
    # Get Order Data list
    public function onGetFormList(Request $request){
        $user_id = Session::get('isLogin');
        $order =  PaintedDoorOrderTitle::where('user_id', $user_id)->get();
        $user = User::where('id', $user_id)->first('email');

        for($i = 0; $i < count($order); $i++){
            $order[$i]['user_id'] = $user->email;
        }

        return $order;
    }

    public function toFormsList(Request $request){
        // return view('Form.FormList');
    }

    # From Order List to Detail
    public function toFormDetail($id){
        $id = substr($id, 3);

        $title = PaintedDoorOrderTitle::where('id', $id)->first();
        $order = PaintedDoorOrderContent::where('serial_number', $title->serial_number)->get();
        // return $order;
        $style = [];
        foreach($order as $key => $item){
            $style[$key] = DoorStyle::where('category_id', $item->category)->get();
            $material[$key] = DoorMaterial::where('door_id', $item->category)->get();

            $finish_first[$key] = DoorFinishOther::where('door_id', $item->category)->get();
            $finish_second[$key] = DoorMullon::get();
            $finish_third[$key]  = DoorHardware::where('door_id', $item->category)->get();
            if($item->category == 1 || $item->category == 2 ){
                $finish_fourth[$key] = FingerPull::get();
            } else if($item->category == 5){
                $finish_fourth[$key]  = DoorHardware::where('door_id', $item->category)->get();
            }
            $finish_fifth[$key] = $item->finish_fifth;
            $finish_sixth[$key] = $item->finish_sixth;
          }
        // return count($finish_first[0]);

        $cabinets = Cabinets::get();
        $finish = Finish::get();
        $jpull = JPULL::get();
        $doorstyle = DoorCategory::get();
        return view('Form.detail', [
            'SerialNumber'  => $title->serial_number,
            'title'         => $title,
            'orders'        => $order,
            'styles'        => $style,
            'cabinets'      => $cabinets,
            'finishs'       => $finish,
            'materials'     => $material,
            'jpull'         => $jpull,
            'doorstyle'     => $doorstyle,
            'finish_first'  => $finish_first,
            'finish_second' => $finish_second,
            'finish_third' => $finish_third,
            'finish_fourth' => $finish_fourth,
            // 'finish_fifth' => $finish_fifth,
        ]);
    }



    # Save Order Content
    public function onSaveOrder(Request $request){
        var_dump($request);
        // PaintedDoorOrderContent::create([
        //         'serial_number'     => Session::get('SerialNumber'),
        //         'user_id'           => Session::get('isLogin'),
        //         'category'          => $request->category == null ? '' : $request->category,
        //         'finish'            => $request->finish == null ? '' : $request->finish,
        //         'style'             => $request->style == null ? '' : $request->style,
        //         'material'          => $request->material == null ? '' : $request->material,
        //         'colour'            => $request->colour == null ? '' : $request->colour,
        //         'finish_first'      => $request->finish_first == null ? '' : $request->finish_first,
        //         'finish_second'     => $request->finish_second == null ? '' : $request->finish_second,
        //         'finish_third'      => $request->finish_third == null ? '' : $request->finish_third,
        //         'finish_fourth'     => $request->finish_fourth == null ? '' : $request->finish_fourth,
        //         'finish_fifth'      => $request->finish_fifth == null ? '' : $request->finish_fifth,
        //         'finish_sixth'      => $request->finish_sixth == null ? '' : $request->finish_sixth,
        //         'dimension_first'   => $request->dimension_first == null ? '' : $request->dimension_first,
        //         'dimension_second'  => $request->dimension_second == null ? '' : $request->dimension_second,
        //         'dimension_third'   => $request->dimension_third == null ? '' : $request->dimension_third,
        //         'dimension_fourth'  => $request->dimension_fourth == null ? '' : $request->dimension_fourth,
        //         'hardware_first'    => $request->hardware_first == null ? '' : $request->hardware_first,
        //         'hardware_second'   => $request->hardware_second == null ? '' : $request->hardware_second,
        //         'hardware_third'    => $request->hardware_third == null ? '' : $request->hardware_third,
        //         'hardware_fourth'   => $request->hardware_fourth == null ? '' : $request->hardware_fourth,
        //         'hardware_fifth'    => $request->hardware_fifth == null ? '' : $request->hardware_fifth,
        //         'total_amount'      => $request->total_amount == null ? '' : $request->total_amount,
        //         'comment'           => $request->comment == null ? '' : $request->comment,
        // ]);
    }



    # To Order Content
    public function toPaintedDoor(Request $request){
        $title = 'First Step';
        $header = "forms";
        $cabinets = Cabinets::get();
        $finish = Finish::get();
        $material_doors = DoorMaterial::get();
        $jpull = JPULL::get();
        $doorstyle = DoorCategory::get();

        $serial_number = strtotime('now');
        Session::put('SerialNumber', $serial_number);
        $serial_number = Session::get('SerialNumber');
        return view('Form.painted_order', [
            'title'     => $title,
            'header'    => $header,
            'cabinets'  => $cabinets,
            'finish'    => $finish,
            'material'  => $material_doors,
            'jpull'     => $jpull,
            'doorstyle' => $doorstyle,
            'SerialNumber'  => $serial_number,
        ]);
    }

    public function toPaintedDoorFirst(){
        $title = "First Step";
        $serial_number = strtotime('now');
        Session::put('SerialNumber', $serial_number);
        $serial_number = Session::get('SerialNumber');

        return view('Form.painted_door.first_step', [
            'title'         => $title,
            'SerialNumber'  => $serial_number,
        ]);
    }

    # Save Order Title
    public function onPaintedDoorFirstStep(Request $request){

        $valid = $request->validate([
            'ordered_date'      => 'required',
            'required_date'     => 'required',
            'customer'          => 'required',
            'company'           => 'required',
            'delivery_address'  => 'required',
            'delivery_state'    => 'required',
            'job_ref'           => 'required',
            'mobile'            => 'required',
        ]);

        PaintedDoorOrderTitle::create([
            'serial_number'     => Session::get('SerialNumber'),
            'user_id'           => Session::get('isLogin'),
            'ordered_date'      => $request->ordered_date,
            'required_date'     => $request->required_date,
            'customer'          => $request->customer,
            'company'           => $request->company,
            'delivery_address'  => $request->delivery_address,
            'delivery_state'    => $request->delivery_state,
            'job_ref'           => $request->job_ref,
            'mobile'            => $request->mobile,
            'completed'         => 0
        ]);

        return redirect()->route('toPaintedDoorSecond');
    }

    public function toPaintedDoorSecond(){
        // $door_category = 1;
        // $doorstyle = DoorStyle::where('category_id', $door_category)->get();
        $title = "Second Step";
        $doorstyle = DoorCategory::get();
        $finish = Finish::get();

        return view('Form.painted_door.second_step', [
                        'title'             => $title,
                        'doorstyle'         => $doorstyle,
                        'finish'            => $finish,
                        'SerialNumber'      => Session::get('SerialNumber'),
                    ]);
    }

    public function onPaintedDoorSecondStep(Request $request){
        $valid = $request->validate([
            'paint_manufacturer'    => 'required',
            'paint_colour'          => 'required',
            'touch_up_paint'        => 'required',
            'extra_paint'           => 'required',
            'door_style'            => 'required',
            'finish'                => 'required',
            'edge_profile'          => 'required',
            'material_thickness'    => 'required',
        ]);

        Session::put('paint_manufacturer',  $valid['paint_manufacturer']);
        Session::put('paint_colour',        $valid['paint_colour']);
        Session::put('touch_up_paint',      $valid['touch_up_paint']);
        Session::put('extra_paint',         $valid['extra_paint']);
        Session::put('door_style',          $valid['door_style']);
        Session::put('finish',              $valid['finish']);
        Session::put('edge_profile',        $valid['edge_profile']);
        Session::put('material_thickness',  $valid['material_thickness']);

        return redirect()->route('toPaintedDoorThird');

    }

    public function toPaintedDoorThird(){

        $serial_number = Session::get('SerialNumber');

        $chosenData['paint_manufacturer']    = Session::get('paint_manufacturer');
        $chosenData['paint_colour']          = Session::get('paint_colour');
        $chosenData['touch_up_paint']        = Session::get('touch_up_paint');
        $chosenData['extra_paint']           = Session::get('extra_paint');
        $chosenData['door_style']            = Session::get('door_style');
        $chosenData['finish']                = Session::get('finish');
        $chosenData['edge_profile']          = Session::get('edge_profile');
        $chosenData['material_thickness']    = Session::get('material_thickness');

        $title = "Third Step";
        $header = "forms";
        $cabinets = Cabinets::get();
        $finish = Finish::get();
        $material_doors = DoorMaterial::get();
        $jpull = JPULL::get();
        $doorstyle = DoorCategory::get();

        return view('Form.painted_door.third_step', [
            'title'         => $title,
            'header'        => $header,
            'cabinets'      => $cabinets,
            'finish'        => $finish,
            'material'      => $material_doors,
            'jpull'         => $jpull,
            'doorstyle'     => $doorstyle,
            'SerialNumber'  => $serial_number,
            'chosenData'    => $chosenData,
        ]);
    }

    public function toPaintedDoorFourth(Request $request){
        $title = 'Final Step';
        $SerialNumber = Session::get('SerialNumber');

        return view('Form.painted_door.fourth_step', [
            'title'             => $title,
            'SerialNumber'      => $SerialNumber,

        ]);
    }


}


