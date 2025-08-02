import { MapPin, Phone, Mail, MessageCircle } from "lucide-react"

export default function AgarwalFooter() {
  return (
    <footer className="bg-[#b40000] text-white font-sans">
      {/* Branding Row */}
      <div className="flex flex-col lg:flex-row justify-between items-center px-6 py-6 bg-[#ffc400] relative">
        <div className="flex items-center space-x-3 z-10">
          <div className="bg-red-600 rounded-full w-8 h-8 text-white text-xs font-bold flex items-center justify-center">
            AMP
          </div>
          <div>
            <h1 className="text-4xl font-extrabold text-red-600">AGARWAL</h1>
            <p className="text-black text-sm font-bold tracking-widest border-2 border-black px-2 py-1 inline-block bg-yellow-300 rounded-full">
              MOVERS PRIVATE LIMITED
            </p>
          </div>
        </div>
        <div className="text-right mt-4 lg:mt-0">
          <span className="bg-red-700 text-white px-4 py-2 rounded-full font-bold text-xl inline-block border-4 border-yellow-300">
            AMP GROUP ( INDIA )
          </span>
          <p className="italic text-white font-semibold mt-2 text-lg">
            India&apos;s Trusted Packers And Movers (Group)
          </p>
        </div>
      </div>

      {/* Main Content Grid */}
      <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 px-6 py-12 text-sm">
        {/* Company Description */}
        <div>
          <div className="border-t-2 border-black w-10 mb-4"></div>
          <p className="leading-6 text-white">
            AMP-AGARWAL MOVERS PRIVATE LIMITED is a leading packing and moving company providing value-added packing and moving services, storage facilities and vehicle transportation services to consumers and businesses. AMP-AGARWAL MOVERS PRIVATE LIMITED is well-positioned to handle this responsibility skillfully to the utmost satisfaction of our customers.
          </p>
        </div>

        {/* Navigation Links */}
        <div>
          <div className="border-t-2 border-black w-10 mb-4"></div>
          <ul className="space-y-2">
            {["Home", "About Us", "FAQ?", "Track", "Blog", "Contact Us"].map((item) => (
              <li key={item}>
                <a href="#" className="hover:text-yellow-400 transition">{item}</a>
              </li>
            ))}
          </ul>
        </div>

        {/* Services */}
        <div>
          <div className="border-t-2 border-black w-10 mb-4"></div>
          <ul className="space-y-2">
            {[
              "Packing & Unpacking",
              "Loading & Unloading",
              "Household Shifting",
              "Local Shifting",
              "Office Shifting",
              "Moving & Packing"
            ].map((service) => (
              <li key={service}>
                <a href="#" className="hover:text-yellow-400 transition">{service}</a>
              </li>
            ))}
          </ul>
        </div>

        {/* Contact Info */}
        <div>
          <div className="border-t-2 border-black w-10 mb-4"></div>
          <h4 className="font-bold mb-2">OFFICE ADDRESS. ()</h4>
          <div className="flex items-start mb-3">
            <MapPin className="w-5 h-5 mt-1 text-yellow-300" />
            <p className="ml-3">
              Plot No E, SHRAVAN Housing Society Ltd,<br />
              Shop No. 21, Ground Floor, 37 to E-40, near Dmart Road, Mall,<br />
              Sector 9, Airoli, Navi Mumbai, Maharashtra 400708
            </p>
          </div>
          <div className="flex items-center space-x-3 mb-2">
            <Phone className="w-5 h-5 text-yellow-300" />
            <p>
              +91-9491900300<br />
              +91-9610016002
            </p>
          </div>
          <div className="flex items-center space-x-3">
            <Mail className="w-5 h-5 text-yellow-300" />
            <a href="mailto:info@agarwalpackersmovers.in" className="hover:text-yellow-400">
              info@agarwalpackersmovers.in
            </a>
          </div>
        </div>
      </div>

      {/* Floating Buttons */}
      <div className="fixed right-5 bottom-5 flex flex-col space-y-3 z-50">
        <a
          href="tel:+919610016002"
          className="w-12 h-12 bg-orange-500 rounded-full flex items-center justify-center shadow-md hover:bg-orange-600 transition"
        >
          <Phone className="w-6 h-6 text-white" />
        </a>
        <a
          href="https://wa.me/919610016002"
          target="_blank"
          rel="noopener noreferrer"
          className="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center shadow-md hover:bg-green-600 transition"
        >
          <MessageCircle className="w-6 h-6 text-white" />
        </a>
      </div>

      {/* Footer Bottom */}
      <div className="bg-black text-center text-gray-400 text-sm py-4">
        &copy; {new Date().getFullYear()} AMP-Agarwal Movers Private Limited. All rights reserved.
      </div>
    </footer>
  )
}