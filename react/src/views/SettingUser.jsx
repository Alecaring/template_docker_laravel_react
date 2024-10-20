import React, { useState } from 'react';
import { FiChevronDown, FiChevronUp, FiLogOut, FiBell, FiUser, FiLock, FiSettings } from 'react-icons/fi';

export default function SettingUser() {
    const [activeSection, setActiveSection] = useState(null);

    const toggleSection = (section) => {
        setActiveSection(activeSection === section ? null : section);
    };

    return (
        <section className="container mt-4">
            <h2 className="mb-4">Settings</h2>

            {/* Informazioni personali */}
            <div className="card mb-3">
                <div className="card-header" onClick={() => toggleSection('personalInfo')}>
                    <FiUser className="setting-icon me-2" />
                    <span>Personal Information</span>
                    {activeSection === 'personalInfo' ? <FiChevronUp className="float-end" /> : <FiChevronDown className="float-end" />}
                </div>
                {activeSection === 'personalInfo' && (
                    <div className="card-body">
                        <label className="form-label">Full Name</label>
                        <input type="text" className="form-control mb-2" placeholder="Your full name" />

                        <label className="form-label">Email</label>
                        <input type="email" className="form-control mb-2" placeholder="Your email address" />

                        <button className="btn btn-primary">Save Changes</button>
                    </div>
                )}
            </div>

            {/* Notifiche */}
            <div className="card mb-3">
                <div className="card-header" onClick={() => toggleSection('notifications')}>
                    <FiBell className="setting-icon me-2" />
                    <span>Notifications</span>
                    {activeSection === 'notifications' ? <FiChevronUp className="float-end" /> : <FiChevronDown className="float-end" />}
                </div>
                {activeSection === 'notifications' && (
                    <div className="card-body">
                        <label>
                            <input type="checkbox" /> Push Notifications
                        </label>
                        <br />
                        <label>
                            <input type="checkbox" /> Email Notifications
                        </label>
                        <br />
                        <label>
                            <input type="checkbox" /> SMS Notifications
                        </label>

                        <button className="btn btn-primary mt-2">Save Changes</button>
                    </div>
                )}
            </div>

            {/* Privacy e sicurezza */}
            <div className="card mb-3">
                <div className="card-header" onClick={() => toggleSection('privacySecurity')}>
                    <FiLock className="setting-icon me-2" />
                    <span>Privacy & Security</span>
                    {activeSection === 'privacySecurity' ? <FiChevronUp className="float-end" /> : <FiChevronDown className="float-end" />}
                </div>
                {activeSection === 'privacySecurity' && (
                    <div className="card-body">
                        <label>
                            <input type="checkbox" /> Two-Factor Authentication
                        </label>
                        <br />
                        <label>
                            <input type="checkbox" /> Private Profile
                        </label>

                        <button className="btn btn-primary mt-2">Save Changes</button>
                    </div>
                )}
            </div>

            {/* Tema */}
            <div className="card mb-3">
                <div className="card-header" onClick={() => toggleSection('theme')}>
                    <FiSettings className="setting-icon me-2" />
                    <span>Appearance & Theme</span>
                    {activeSection === 'theme' ? <FiChevronUp className="float-end" /> : <FiChevronDown className="float-end" />}
                </div>
                {activeSection === 'theme' && (
                    <div className="card-body">
                        <label className="form-label">Theme</label>
                        <select className="form-select mb-2">
                            <option>Light</option>
                            <option>Dark</option>
                            <option>System Default</option>
                        </select>

                        <button className="btn btn-primary">Save Changes</button>
                    </div>
                )}
            </div>

            {/* Logout */}
            <div className="card mb-3">
                <div className="card-header">
                    <FiLogOut className="setting-icon me-2" />
                    <span>Logout</span>
                </div>
            </div>
        </section>
    );
}
