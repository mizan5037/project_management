<aside id="rightsidebar" class="right-sidebar">
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span><a href="{{ route('admin.category.create') }}">Add Category</a></span>
                        </li>

                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span><a href="{{ route('admin.service.create') }}">Add Service</a></span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span><a href="{{ route('admin.client.create') }}">Add Client</a></span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span><a href="{{ route('admin.employee.create') }}">Add Employee</a></span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span><a href="{{ route('admin.project.create') }}">Add Project</a></span>
                        </li>
                        
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>