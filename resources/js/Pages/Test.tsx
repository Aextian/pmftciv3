import React, { PropsWithChildren } from 'react';
import { usePage } from '@inertiajs/react';

interface Admin {
  id: number;
  // Add other properties as needed
}

export const Test: React.FC = () => {

  const { admin } = usePage().props as { admin?: Admin }; // Make admin property optional


  if (!admin) {
    // Handle case where admin data is not available
    return <div>Loading...</div>;
  }

  return (
    <div>Test {admin.id}</div>
  );
};

export default Test;
