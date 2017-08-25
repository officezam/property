<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\PropertyModel;
use App\SocialAcounts;
use App\CityModel;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Response;



class SearchController extends Controller
{
	/*
	 * load all intital files
	 * */
	public function __construct()
	{
		$this->PropertyModel = new PropertyModel();
		$this->User          = new User();
		$this->SocialAcounts = new SocialAcounts();
		$this->CityModel     = new CityModel();

	}

	/*
	 * Search Data by Ajax on text filesd on change
	 * */
	public function searchajax(Request $request)
    {
		$term = $request->term;
		$properties = $this->PropertyModel->where('title' , 'like' , '%'. $term .'%')->where('propertexpire' , '>' , date("Y-m-d")) ->where('status' , '=' , '1')->get();
		foreach ( $properties as $query ){
			$data[] = array('value' => $query->title, 'id' =>$query->id);
		}
		return response()->json($data);
	}

	/*
	 * Search Form submit Data
	 *  */
	public function  SearchFormData(Request $request){

		dd($request);
		$keyword = $request->keyword;
		$city    = $request->city;
		$type = $request->type;
		$Agent   = $request->agency;

		//Search When only keyword seacrh by user
		if($keyword != '' && $city == 'All' && $type == 'All' && $Agent == 'All'){


			$properties = $this->PropertyModel->where('title' , 'like' , '%'. $keyword .'%')->where('propertexpire' , '>' , date("Y-m-d")) ->where('status' , '=' , '1')->paginate(6);

		}else
			//Search When only city seacrh by user
			if($keyword == '' && $city != 'All' && $type == 'All' && $Agent == 'All'){

				$properties = $this->PropertyModel->where('city' , '=' , $city)->where('propertexpire' , '>' , date("Y-m-d")) ->where('status' , '=' , '1')->paginate(6);

			}else
				//Search When only type seacrh by user
				if($keyword == '' && $city == 'All' && $type != 'All' && $Agent == 'All'){
				//dd($request);
					//$properties = $this->PropertyModel->where('type' , '=' , $type)->where('propertexpire' , '>' , date("Y-m-d")) ->where('status' , '=' , '1')->paginate(6);


                    $properties = $this->PropertyModel->where('type', '=', $type)->orWhere('purpose', '=', $type)->where('propertexpire' , '>' , date("Y-m-d")) ->where('status' , '=' , '1')->paginate(6);

				}else
					//Search When only Agent seacrh by user
					if($keyword == '' && $city == 'All' && $type == 'All' && $Agent != 'All'){

						//$Agents = $this->User->where('isActive', '=', '1')->where('isActive', '=', '1')->paginate(6);
						$properties = $this->PropertyModel->where('created_by' , '=' , $Agent)->where('propertexpire' , '>' , date("Y-m-d")) ->where('status' , '=' , '1')->paginate(6);

					}else
						//Search When only keyword and city seacrh by user
						if($keyword != '' && $city != 'All' && $type == 'All' && $Agent == 'All')
						{
							$properties = $this->PropertyModel
								->where('title' , 'like' , '%'. $keyword .'%')
								->where('city' , '=' , $city)
								->where('propertexpire' , '>' , date("Y-m-d"))
								->where('status' , '=' , '1')
								->paginate(6);

						}else
							//Search When only keyword and type seacrh by user
							if($keyword != '' && $city == 'All' && $type != 'All' && $Agent == 'All')
							{
								$properties = $this->PropertyModel
									->where('title' , 'like' , '%'. $keyword .'%')
									->where('type' , '=' , $type)
                                    ->orWhere('purpose', '=', $type)
									->where('propertexpire' , '>' , date("Y-m-d"))
									->where('status' , '=' , '1')
									->paginate(6);

							}
							else
								//Search When only keyword and agent seacrh by user
								if($keyword != '' && $city == 'All' && $type == 'All' && $Agent != 'All')
								{
									$properties = $this->PropertyModel
										->where('title' , 'like' , '%'. $keyword .'%')
										->where('created_by' , '=' , $Agent)
										->where('propertexpire' , '>' , date("Y-m-d"))
										->where('status' , '=' , '1')
										->paginate(6);

								}
								else
									//Search When only city and type seacrh by user
									if($keyword == '' && $city != 'All' && $type != 'All' && $Agent == 'All')
									{
										$properties = $this->PropertyModel
											->where('city' , '=' , $city)
											->where('type' , '=' , $type)
                                            ->orWhere('purpose', '=', $type)
											->where('propertexpire' , '>' , date("Y-m-d"))
											->where('status' , '=' , '1')
											->paginate(6);

									}else
										//Search When only city and Agent seacrh by user
										if($keyword == '' && $city != 'All' && $type == 'All' && $Agent != 'All')
										{
											$properties = $this->PropertyModel
												->where('city' , '=' , $city)
												->where('created_by' , '=' , $Agent)
												->where('propertexpire' , '>' , date("Y-m-d"))
												->where('status' , '=' , '1')
												->paginate(6);

										}else
											//Search When only type and Agent seacrh by user
											if($keyword == '' && $city == 'All' && $type != 'All' && $Agent != 'All')
											{
												$properties = $this->PropertyModel
													->where('type' , '=' , $type)
                                                    ->orWhere('purpose', '=', $type)
													->where('created_by' , '=' , $Agent)
													->where('propertexpire' , '>' , date("Y-m-d"))
													->where('status' , '=' , '1')
													->paginate(6);

											}else
												//Search When keyword + city + type seacrh by user
												if($keyword != '' && $city != 'All' && $type != 'All' && $Agent == 'All')
												{
													$properties = $this->PropertyModel
														->where('title' , 'like' , '%'. $keyword .'%')
														->where('type' , '=' , $type)
                                                        ->orWhere('purpose', '=', $type)
														->where('city' , '=' , $city)
														->where('propertexpire' , '>' , date("Y-m-d"))
														->where('status' , '=' , '1')
														->paginate(6);

												}else
													//Search When keyword + city + agent seacrh by user
													if($keyword != '' && $city != 'All' && $type == 'All' && $Agent != 'All')
													{

														$properties = $this->PropertyModel
															->where('title' , 'like' , '%'. $keyword .'%')
															->where('city' , '=' , $city)
															->where('created_by' , '=' , $Agent)
															->where('propertexpire' , '>' , date("Y-m-d"))
															->where('status' , '=' , '1')
															->paginate(6);

													}else
														//Search When keyword + type + agent seacrh by user
														if($keyword != '' && $city == 'All' && $type != 'All' && $Agent != 'All')
														{
															$properties = $this->PropertyModel
																->where('title' , 'like' , '%'. $keyword .'%')
																->where('type' , '=' , $type)
                                                                ->orWhere('purpose', '=', $type)
																->where('created_by' , '=' , $Agent)
																->where('propertexpire' , '>' , date("Y-m-d"))
																->where('status' , '=' , '1')
																->paginate(6);

														}else
															//Search When type + city + agent seacrh by user
															if($keyword == '' && $city != 'All' && $type != 'All' && $Agent != 'All')
															{
																$properties = $this->PropertyModel
																	->where('type' , '=' , $type)
                                                                    ->orWhere('purpose', '=', $type)
																	->where('city' , '=' , $city)
																	->where('created_by' , '=' , $Agent)
																	->where('propertexpire' , '>' , date("Y-m-d"))
																	->where('status' , '=' , '1')
																	->paginate(6);

															}else
																//Search When keyword + type + city + agent seacrh by user
																if($keyword != '' && $city != 'All' && $type != 'All' && $Agent != 'All')
																{
																	$properties = $this->PropertyModel
																		->where('title' , 'like' , '%'. $keyword .'%')
																		->where('type' , '=' , $type)
                                                                        ->orWhere('purpose', '=', $type)
																		->where('city' , '=' , $city)
																		->where('created_by' , '=' , $Agent)
																		->where('propertexpire' , '>' , date("Y-m-d"))
																		->where('status' , '=' , '1')
																		->paginate(6);

																}else
																	//Search When keyword + type + city + agent seacrh by user
																	if($keyword == '' && $city == 'All' && $type == 'All' && $Agent == 'All')
																	{
																		$properties = $this->PropertyModel
																			->where('propertexpire' , '>' , date("Y-m-d"))
																			->where('status' , '=' , '1')
																			->paginate(6);
																	}

																//dd($properties);
		$Agents = $this->User->where('BusinessType', '=', '2')->where('isActive', '=', '1')->get();
		$otherProperty =$this->PropertyModel->where('propertexpire' , '>' , date("Y-m-d")) ->where('status' , '=' , '1')->where('type' , '=' , 'projects')->paginate(6);
		$cities               = $this->CityModel->get();
		$SocialAcounts = $this->SocialAcounts->get();
		return view('search-result',  ['SearchProperty' => $properties ,'Social_account' => $SocialAcounts ,'AllProperty' => $otherProperty , 'Agents' => $Agents , 'cities' => $cities]);

	}
}
