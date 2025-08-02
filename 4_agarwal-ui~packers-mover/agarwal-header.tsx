'use client'

import Link from 'next/link'
import { useState } from 'react'
import { Phone, MapPin, Menu, X, ChevronDown } from 'lucide-react'

export default function Header() {
  const [mobileMenuOpen, setMobileMenuOpen] = useState(false)
  const [mobileServicesOpen, setMobileServicesOpen] = useState(false)

const navItems = [
  { label: 'Home', href: '/' },
  { label: 'About Us', href: '/about' },
  { label: 'Services', href: '#' }, // dropdown or submenu
  { label: 'FAQ', href: '/faq' },
  { label: 'Offices', href: '/offices' },
  { label: 'Top Listed Cities', href: '/toplistedcities' },
  { label: 'Contact Us', href: '/contact' },
];

  const services = [
    'Moving Companies',
    'Pest Control',
    'International Relocation',
    'Luggage Transport',
    'Truck/Tempo on Rent',
    'Pet Relocation',
    'Warehousing',
    'Bike Transportation',
    'Car Transportation',
    'Relocation Services',
  ]

  const formatSlug = (text: string) =>
    text.toLowerCase().replace(/\s+/g, '-')

  return (
    <div className="w-full">
      <div className="h-2 bg-gradient-to-r from-orange-500 to-red-500" />

      {/* Header */}
      <div className="bg-yellow-400 px-4 md:px-6 py-4">
        <div className="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-4">
          {/* Logo */}
          <div className="flex items-center space-x-3">
            <div className="w-12 h-12 bg-red-600 rounded-full flex items-center justify-center shadow">
              <span className="text-white font-bold text-xs">AMP</span>
            </div>
            <div>
              <h1 className="text-3xl md:text-4xl font-extrabold text-red-600 leading-tight">AGARWAL</h1>
              <p className="text-black font-semibold text-sm bg-yellow-300 px-2 py-0.5 inline-block rounded shadow-sm tracking-wide">
                MOVERS PRIVATE LIMITED
              </p>
            </div>
          </div>

          {/* Badge */}
          <div className="hidden md:flex items-center justify-center">
            <div className="w-28 h-28 rounded-full border-4 border-red-600 bg-yellow-200 flex flex-col items-center justify-center text-center p-2 shadow">
              <span className="text-black font-bold text-xs">THE REAL</span>
              <span className="text-black font-bold text-xs">GROUP</span>
              <span className="text-red-600 font-extrabold text-lg">AMP</span>
              <span className="text-black text-xs">AT (1998)</span>
            </div>
          </div>

          {/* Contact */}
          <div className="text-right">
            <div className="flex items-center justify-end space-x-2 mb-1">
              <Phone className="w-4 h-4 text-green-600" />
              <span className="text-green-700 font-semibold text-sm">Call Us Now</span>
            </div>
            <div className="text-2xl md:text-3xl font-extrabold text-red-600">96 1001 6002</div>
            <div className="flex items-center justify-end space-x-1">
              <span className="text-black text-sm font-semibold bg-yellow-300 px-1 rounded">AMP GROUP (INDIA)</span>
              <MapPin className="w-4 h-4 text-red-600" />
            </div>
          </div>
        </div>
      </div>

      {/* Navigation */}
      <div className="bg-gradient-to-r from-orange-400 via-orange-300 to-orange-400 px-4 md:px-6 pt-2 pb-3">
        <div className="max-w-7xl mx-auto">
          {/* Mobile Toggle */}
          <div className="flex md:hidden justify-end pb-2">
            <button onClick={() => setMobileMenuOpen(!mobileMenuOpen)} className="text-gray-700">
              {mobileMenuOpen ? <X size={24} /> : <Menu size={24} />}
            </button>
          </div>

          {/* Mobile Nav */}
          {mobileMenuOpen && (
            <nav className="md:hidden bg-white rounded shadow z-50">
              <ul className="flex flex-col space-y-3 p-4">
                {navItems.map((item) => (
                  <li key={item.label}>
                    <div className="flex items-center justify-between">
                      {item.label === 'Services' ? (
                        <>
                          <span className="text-sm font-medium text-gray-700">Services</span>
                          <button onClick={() => setMobileServicesOpen(!mobileServicesOpen)}>
                            <ChevronDown className={`w-4 h-4 transform ${mobileServicesOpen ? 'rotate-180' : ''}`} />
                          </button>
                        </>
                      ) : (
                        <Link href={item.href} className="text-sm font-medium text-gray-700 hover:text-orange-600">
                          {item.label}
                        </Link>
                      )}
                    </div>

                    {/* Services dropdown mobile */}
                    {item.label === 'Services' && mobileServicesOpen && (
                      <ul className="pl-4 pt-2 space-y-1">
                        {services.map((service) => (
                          <li key={service}>
                            <Link
                              href={`/services/${formatSlug(service)}`}
                              className="text-xs text-gray-600 hover:text-red-600"
                            >
                              {service}
                            </Link>
                          </li>
                        ))}
                      </ul>
                    )}
                  </li>
                ))}
              </ul>
            </nav>
          )}

          {/* Desktop Nav */}
          <nav className="hidden md:flex justify-center relative z-50">
            <ul className="flex items-center bg-gradient-to-b from-gray-300 via-white to-gray-300 border border-gray-400 rounded-full shadow-inner overflow-hidden">
              {navItems.map((item, index) =>
                item.label === 'Services' ? (
                  <li
                    key={item.label}
                    className="group relative px-5 py-2 text-[15px] font-medium border-r border-gray-400 last:border-r-0 text-gray-800 hover:text-orange-600 cursor-pointer"
                  >
                    <div className="flex items-center gap-1">
                      {item.label}
                      <ChevronDown className="w-4 h-4" />
                    </div>
                    {/* Dropdown */}
                    <ul className="absolute top-full left-0 w-64 mt-2 bg-white shadow-lg rounded opacity-0 group-hover:opacity-100 invisible group-hover:visible transition-all duration-200 z-50">
                      {services.map((service) => (
                        <li key={service}>
                          <Link
                            href={`/services/${formatSlug(service)}`}
                            className="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-100 hover:text-red-600"
                          >
                            {service}
                          </Link>
                        </li>
                      ))}
                    </ul>
                  </li>
                ) : (
                  <li
                    key={item.label}
                    className={`px-5 py-2 text-[15px] font-medium border-r border-gray-400 last:border-r-0 ${
                      index === 0
                        ? 'text-red-600 bg-white shadow-inner rounded-l-full rounded-r-full'
                        : 'text-gray-800 hover:text-orange-600'
                    }`}
                  >
                    <Link href={item.href} className="block">
                      {item.label}
                    </Link>
                  </li>
                )
              )}
            </ul>
          </nav>
        </div>
      </div>

      <div className="h-2 bg-gradient-to-r from-orange-500 to-red-500" />
    </div>
  )
}