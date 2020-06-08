@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h2 class="my-4 text-center font-weight-bold">File Management</h2>
    <div class="row">
        <div class="col-md-12 my-2">
            <div class="file-upload-container">
                {{-- <form action="#" class="dropzone">
                    <div class="fallback">
                      <input name="file" type="file" multiple />
                    </div>
                  </form> --}}
                  <form action="#" class="dropzone dz-clickable text-center">
                    <div class="dz-message d-flex flex-column">
                      <i class="fas fa-cloud-upload-alt text-muted"></i>
                      Drag &amp; Drop here or click
                    </div>
                    <div class="btn-group my-2 flex-wrap flex-column file-type-selection" role="group" aria-label="File Type Selection">
                        <label for="" class="font-weight-bold text-muted">Select File Type</label>
                        <div class="btn-group-sm" id="file-type-selection">
                            <button type="button" class="btn btn-primary" id="public">Public</button>
                            <button type="button" class="btn btn-primary" id="system-file">System File</button>
                        </div>
                    </div>
                    <div class="btn-group my-2 flex-wrap flex-column system-file-type-selection" role="group" aria-label="System File Type Selection">
                        <label for="" class="font-weight-bold text-muted">When System FIle Type is selected</label>
                        <div class="btn-group-sm">
                            <button type="button" class="btn btn-primary">Image</button>
                            <button type="button" class="btn btn-primary">CSS</button>
                            <button type="button" class="btn btn-primary">JS</button>
                        </div>
                    </div>
                    <div class="w-100 mt-5">
                      <button type="button" class="btn btn-danger">Upload</button>
                    </div>
                  </form>
            </div>
            {{-- <div class="btn-group my-2 btn-group-sm" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-success">Image</button>
                <button type="button" class="btn btn-warning">Css</button>
                <button type="button" class="btn btn-danger">Js</button>
            </div> --}}
        </div>
        <div class="col-md-12 my-2">
            <div class="table-responsive">
                <table id="file-table" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th class="text-center no-sort">Action</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">
                                <span class="dropdown file-dropdown">
                                    <span class="m-settings danger-text m-1 img-thumbnail py-1 px-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cogs" title="Other Settings"></i></span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#replace-file-modal" href="#"><i class="fas fa-exchange-alt icon-padding-right"></i>Replace</a>
                                        <a class="dropdown-item" data-toggle="modal" data-target="#" href="#"><i class="fas fa-download icon-padding-right"></i>Download</a>
                                        <a class="dropdown-item" data-toggle="modal" data-target="#" href="#"><i class="fas fa-trash icon-padding-right"></i>Remove</a>
                                    </div>
                                </span>
                            </td>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                            <!-- Modal -->
                            <div class="modal fade" id="replace-file-modal" tabindex="-1" role="dialog" aria-labelledby="replaceFileModal" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title">Replace File</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="file-upload-container">
                                            <form action="#" class="dropzone dz-clickable">

                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <span class="dropdown file-dropdown">
                                    <span class="m-settings danger-text m-1 img-thumbnail py-1 px-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cogs" title="Other Settings"></i></span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#" href="#"><i class="fas fa-exchange-alt icon-padding-right"></i>Replace</a>
                                        <a class="dropdown-item" data-toggle="modal" data-target="#" href="#"><i class="fas fa-download icon-padding-right"></i>Download</a>
                                        <a class="dropdown-item" data-toggle="modal" data-target="#" href="#"><i class="fas fa-trash icon-padding-right"></i>Remove</a>
                                    </div>
                                </span>
                            </td>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                            <td>$170,750</td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <span class="dropdown file-dropdown">
                                    <span class="m-settings danger-text m-1 img-thumbnail py-1 px-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cogs" title="Other Settings"></i></span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#" href="#"><i class="fas fa-exchange-alt icon-padding-right"></i>Replace</a>
                                        <a class="dropdown-item" data-toggle="modal" data-target="#" href="#"><i class="fas fa-download icon-padding-right"></i>Download</a>
                                        <a class="dropdown-item" data-toggle="modal" data-target="#" href="#"><i class="fas fa-trash icon-padding-right"></i>Remove</a>
                                    </div>
                                </span>
                            </td>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>
                            <td>2009/01/12</td>
                            <td>$86,000</td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <span class="dropdown file-dropdown">
                                    <span class="m-settings danger-text m-1 img-thumbnail py-1 px-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cogs" title="Other Settings"></i></span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#" href="#"><i class="fas fa-exchange-alt icon-padding-right"></i>Replace</a>
                                        <a class="dropdown-item" data-toggle="modal" data-target="#" href="#"><i class="fas fa-download icon-padding-right"></i>Download</a>
                                        <a class="dropdown-item" data-toggle="modal" data-target="#" href="#"><i class="fas fa-trash icon-padding-right"></i>Remove</a>
                                    </div>
                                </span>
                            </td>
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>2012/03/29</td>
                            <td>$433,060</td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <span class="dropdown file-dropdown">
                                    <span class="m-settings danger-text m-1 img-thumbnail py-1 px-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cogs" title="Other Settings"></i></span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#" href="#"><i class="fas fa-exchange-alt icon-padding-right"></i>Replace</a>
                                        <a class="dropdown-item" data-toggle="modal" data-target="#" href="#"><i class="fas fa-download icon-padding-right"></i>Download</a>
                                        <a class="dropdown-item" data-toggle="modal" data-target="#" href="#"><i class="fas fa-trash icon-padding-right"></i>Remove</a>
                                    </div>
                                </span>
                            </td>
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>33</td>
                            <td>2008/11/28</td>
                            <td>$162,700</td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <span class="dropdown file-dropdown">
                                    <span class="m-settings danger-text m-1 img-thumbnail py-1 px-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cogs" title="Other Settings"></i></span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#" href="#"><i class="fas fa-exchange-alt icon-padding-right"></i>Replace</a>
                                        <a class="dropdown-item" data-toggle="modal" data-target="#" href="#"><i class="fas fa-download icon-padding-right"></i>Download</a>
                                        <a class="dropdown-item" data-toggle="modal" data-target="#" href="#"><i class="fas fa-trash icon-padding-right"></i>Remove</a>
                                    </div>
                                </span>
                            </td>
                            <td>Brielle Williamson</td>
                            <td>Integration Specialist</td>
                            <td>New York</td>
                            <td>61</td>
                            <td>2012/12/02</td>
                            <td>$372,000</td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <span class="dropdown file-dropdown">
                                    <span class="m-settings danger-text m-1 img-thumbnail py-1 px-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cogs" title="Other Settings"></i></span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#" href="#"><i class="fas fa-exchange-alt icon-padding-right"></i>Replace</a>
                                        <a class="dropdown-item" data-toggle="modal" data-target="#" href="#"><i class="fas fa-download icon-padding-right"></i>Download</a>
                                        <a class="dropdown-item" data-toggle="modal" data-target="#" href="#"><i class="fas fa-trash icon-padding-right"></i>Remove</a>
                                    </div>
                                </span>
                            </td>
                            <td>Herrod Chandler</td>
                            <td>Sales Assistant</td>
                            <td>San Francisco</td>
                            <td>59</td>
                            <td>2012/08/06</td>
                            <td>$137,500</td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <span class="dropdown file-dropdown">
                                    <span class="m-settings danger-text m-1 img-thumbnail py-1 px-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cogs" title="Other Settings"></i></span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#" href="#"><i class="fas fa-exchange-alt icon-padding-right"></i>Replace</a>
                                        <a class="dropdown-item" data-toggle="modal" data-target="#" href="#"><i class="fas fa-download icon-padding-right"></i>Download</a>
                                        <a class="dropdown-item" data-toggle="modal" data-target="#" href="#"><i class="fas fa-trash icon-padding-right"></i>Remove</a>
                                    </div>
                                </span>
                            </td>
                            <td>Rhona Davidson</td>
                            <td>Integration Specialist</td>
                            <td>Tokyo</td>
                            <td>55</td>
                            <td>2010/10/14</td>
                            <td>$327,900</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
