const services = [
  'Relocation Services',
  'Car Transportation',
  'Bike Transportation',
  'Warehousing',
  'Pet Relocation',
  'Truck/Tempo on Rent',
  'Luggage Transport',
  'International Relocation',
  'Pest Control',
  'Moving Companies',
];

const descriptions = [
  'We provide seamless home and office relocation with expert packing and transport.',
  'Safely transport your car with insured, GPS-tracked carriers across India.',
  'Quick and damage-free bike shifting with proper packaging and secure carriers.',
  'Clean, secure, and affordable storage solutions for short or long-term needs.',
  'Stress-free, safe pet travel services with veterinary supervision and comfort.',
  'On-demand tempo and truck rental with helpers for all sizes of moves.',
  'Send your extra bags and boxes across cities at affordable rates.',
  'Expert global moving support with customs clearance and documentation.',
  'Safe and effective pest control services for home, office, and warehouse.',
  'Find trusted moving partners near you with end-to-end shifting support.',
];

export default function ServicesSection() {
  return (
    <section className="py-16 px-4 bg-gray-100">
      <div className="max-w-7xl mx-auto">
        <h2 className="text-3xl md:text-4xl font-bold text-center mb-10 text-red-700">Our Services</h2>
        <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
          {services.map((title, index) => (
            <div
              key={index}
              className="relative bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 flex flex-col"
            >
              <div
                className="h-40 bg-cover bg-center"
                style={{ backgroundImage: "url('/images/movers-background.jpeg')" }}
              ></div>
              <div className="p-5 flex flex-col flex-grow text-center">
                <h3 className="text-lg font-semibold mb-2 text-gray-800">{title}</h3>
                <p className="text-sm text-gray-600 mb-4">{descriptions[index]}</p>
                <button className="mt-auto bg-red-700 hover:bg-red-800 text-white px-4 py-2 rounded-md text-sm font-semibold">
                  GET QUOTE
                </button>
              </div>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
}