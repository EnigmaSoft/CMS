@extends(app('theme')->make('layout.template', true))

@section('title', $title.' Rankings')

@section('page_title', $title.' Rankings')

@section('content')
                            <div class="row">
								<div class="col-md-12">
									<div class="hidden" style="margin-bottom: 20px;">
										<ul class="nav nav-pills nav-justified">
											<li><a href="{{ route('rankings') }}">Overall</a></li>
											<li><a href="{{ route('jobRankings') }}">Job</a></li>
											<li><a href="{{ route('fameRankings') }}">Fame</a></li>
											<li><a href="{{ route('rankings') }}">Guild</a></li>
										</ul>
									</div>
									<div class="well">
										<ul class="nav nav-pills nav-justified">
											<li class="{{ Route::currentRouteName() == 'rankings' ? 'active' : '' }}"><a href="{{ route('rankings') }}"><img src="{{ asset('static/img/rankings/icons/overall.png') }}" data-toggle="tooltip" title="Overall Rankings" alt="All"/></a></li>
											<li class="{{ Route::currentRouteName() == 'jobRankings' && $class == 'beginner' ? 'active' : '' }}"><a href="{{ route('jobRankings', ['class' => 'beginner']) }}"><img src="{{ asset('static/img/rankings/icons/beginner.png') }}" data-toggle="tooltip" title="Beginner" alt="Beginner"/></a></li>
											<li class="{{ Route::currentRouteName() == 'jobRankings' && $class == 'warrior' ? 'active' : '' }}"><a href="{{ route('jobRankings', ['class' => 'warrior']) }}"><img src="{{ asset('static/img/rankings/icons/warrior.png') }}" data-toggle="tooltip" title="Warrior" alt="Warrior"/></a></li>
											<li class="{{ Route::currentRouteName() == 'jobRankings' && $class == 'magician' ? 'active' : '' }}"><a href="{{ route('jobRankings', ['class' => 'magician']) }}"><img src="{{ asset('static/img/rankings/icons/magician.png') }}" data-toggle="tooltip" title="Magician" alt="Magician"/></a></li>
											<li class="{{ Route::currentRouteName() == 'jobRankings' && $class == 'bowman' ? 'active' : '' }}"><a href="{{ route('jobRankings', ['class' => 'bowman']) }}"><img src="{{ asset('static/img/rankings/icons/bowman.png') }}" data-toggle="tooltip" title="Bowman" alt="Bowman"/></a></li>
											<li class="{{ Route::currentRouteName() == 'jobRankings' && $class == 'thief' ? 'active' : '' }}"><a href="{{ route('jobRankings', ['class' => 'thief']) }}"><img src="{{ asset('static/img/rankings/icons/thief.png') }}" data-toggle="tooltip" title="Thief" alt="Theif"/></a></li>
											<li class="{{ Route::currentRouteName() == 'jobRankings' && $class == 'pirate' ? 'active' : '' }}"><a href="{{ route('jobRankings', ['class' => 'pirate']) }}"><img src="{{ asset('static/img/rankings/icons/pirate.png') }}" data-toggle="tooltip" title="Pirate" alt="Pirate"/></a></li>
											<li class="{{ Route::currentRouteName() == 'fameRankings' ? 'active' : '' }}"><a href="{{ route('fameRankings') }}"><img src="{{ asset('static/img/rankings/icons/fame.png') }}" data-toggle="tooltip" title="Fame" alt="Fame"/></a></li>
											<li class="{{ Route::currentRouteName() == 'guildRankings' ? 'active' : '' }}"><a href="{{ route('guildRankings') }}"><img src="{{ asset('static/img/rankings/icons/guild.png') }}" data-toggle="tooltip" title="Guild" alt="Guild"/></a></li>
										</ul>
									</div>
								</div>
								<div class="col-md-12 col-md-offset-0">
									<form id="search_form" method="get" action="{{ $type == 'fame' ? route('fameRankings') : route('rankings') }}/">
										<div class="well">
											<div class="input-group">
												<label for="search" class="input-group-addon">Character name</label>
												<input class="form-control" id="search" type="text" name="name" value="{{ $name }}" required />
												<span class="input-group-btn">
													<button class="btn btn-warning btn-group-search" type="submit"><i class="glyphicon glyphicon-search"></i></button>
												</span>
											</div>
										</div>
									</form>
								</div>
                            </div>
                            <div class="rankings table-responsive">
								<table id="ranking" class="table table-striped table-hover text-center table-bordered">
									<thead>
										<tr>
											<th>Rank</th>
											<th>Character</th>
											<th>Job</th>
											<th>{{ ucfirst($type) }}</th>
										</tr>
									</thead>
									<tbody>
										@if ($characters)
											@foreach ($characters as $player)
												@if ($victim !== null)
													<tr{!! strtolower($victim->name) == strtolower($player->name) ? ' class="golden"' : '' !!}>
												@elseif ($player !== null)
													<tr{!! strtolower($name) == strtolower($player->name) ? ' class="golden"' : '' !!}>
												@else
													<tr>
												@endif
													@if ($counter == 'iteration')
														<td>
															<span class="label label-{{ $loop->iteration > 3 ? $ranks[0] : $ranks[$loop->iteration] }}">{{ number_format($loop->iteration) }}</span>
														</td>
													@elseif ($counter == 'rank')
														<td>
															<span class="label label-{{ $player->{$rank} > 3 ? $ranks[0] : $ranks[$player->{$rank}] }}">{{ number_format($player->{$rank}) }}</span>
														</td>
													@else
														<td>
															<span class="label label-{{ $player->{$rank} > 3 ? $ranks[0] : $ranks[$player->{$rank}] }}">{{ number_format($player->{$rank}) }}</span>
														</td>
													@endif
													<td style="position: relative;">
														<img src="{{ asset('static/img/rankings/create.php?name='.$player->name) }}" alt="{{ $player->name }}" class="avatar img-responsive" style="margin: 0 auto -10px;">
														<span class="label label-critical">{{ $player->name }}</span>
													</td>
													<td><img src="{{ asset('static/img/rankings/icons/'.strtolower($player->class).'.png') }}" data-toggle="tooltip" title="{{ $player->vjob }}" alt="{{ $player->vjob }}"/></td>
													<td>
														{{ $player->{$column} }}
														<br />

														@if ($type == 'rebirth')
															Level: {{ $player->level }}
															<br />
														@endif

														@if ($type != 'fame')
															<strong style="color:#666;font-size:11px;border-bottom: 3px solid #e9e9e9;padding: 1px 5px;display: inline-block;font-family: 'Arial';">
																({{ number_format($player->exp) }})
															</strong><br />
															@if ($type == 'level')
																<span class="
																	@if ($player->{$rank.'Move'} > 0)
																		text-success
																	@elseif ($player->{$rank.'Move'} < 0)
																		text-danger
																	@else
																		text-default
																	@endif
																" style="font-size: 11px;">
																	@if ($player->{$rank.'Move'} > 0)
																		<i class="fa fa-arrow-up"></i>
																	@elseif ($player->{$rank.'Move'} < 0)
																		<i class="fa fa-arrow-down"></i>
																	@endif
																	({{ number_format($player->{$rank.'Move'}) }})
																</span>
															@endif
														@endif
													</td>
												</tr>
											@endforeach
										@endif
									</tbody>
                                </table>
							</div>
							@if ($notification)
								<div class="alert alert-danger" style="border-radius:0 0 4px 4px;margin:-22px 0 0 0">
									<strong>Error!</strong> {{ $notification }}
								</div>
							@elseif (!count($characters))
								<div class="alert alert-info" style="border-radius:0 0 4px 4px;margin:-22px 0 0 0">
                                    No characters to display.
								</div>
                            @endif
                            <div class="col-md-8 col-md-offset-2 text-center">
                                @if (is_object($characters))
                                    {{ $characters->fragment('ranking')->links('partials.pagination-sm') }}
                                @endif
							</div>
@endsection
